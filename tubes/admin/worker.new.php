<?php 

    require '../function.php';

    // to Retrieve form data

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST["name"];
        $dateJoined = $_POST["date_joined"];
        $formattedDate = date('Y-m-d', strtotime($dateJoined));
        $email = $_POST["email"];
        $phoneNumber = $_POST["phone_number"];
        $salary = $_POST["salary"];
        $cleanedSalary = str_replace(["Rp.", ",", " "], "", $salary);

        // prepare SQL query

        $sql = "INSERT INTO workers (name, date_joined, email, phone_number, salary)
                VALUES ('$name', '$formattedDate', '$email', '$phoneNumber', '$cleanedSalary')";


        // execute the sql query

        if (connection() -> query($sql) === TRUE) {

            echo "New worker added successfully!";
            
            // Redirect to workers table page
    
            header("Location: workers.php");
            exit; //to terminate the current script to ensure the redirect takes effect 

        } else {

            echo "Error: " . $sql . "<br>" . $conn -> error;

        }
        
    }

        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Worker</title>

    <!-- Links -->

    <!-- CSS -->
    <link rel="stylesheet" href="../css/worker.new.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Roboto+Slab:wght@700&family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class= "add-worker">

        <div class= "logo">

            <h2>Add New Worker</h2>

        </div>

        <div class= "add-worker-form">

            <form action="worker.new.php" method= "post">

                <div class= "worker-details">

                    <div class= "input-box">

                        <span class= "details">Name</span>
                        <input type="text" name="name" placeholder= "Fill in this blank" required>

                    </div>

                    <div class= "input-box">

                        <span class= "details">Date Joined</span>
                        <input type="text" name="date_joined" placeholder= "Fill in this blank" required>

                    </div>

                    <div class= "input-box">

                        <span class= "details">Email</span>
                        <input type="text" name="email" placeholder= "Fill in this blank" required>

                    </div>

                    <div class= "input-box">

                        <span class= "details">Phone Number</span>
                        <input type="text" name="phone_number" placeholder= "Fill in this blank" required>

                    </div>

                    <div class= "input-box">

                        <span class= "details">Salary</span>
                        <input type="text" name="salary" placeholder= "Fill in this blank" required>

                    </div>

                </div>

                <div class= "button">

                    <input type="submit" name="" id="" value= "Submit">

                </div>

            </form>

        </div>

    </div>

</body>
</html>