<?php 

    require 'function.php';

        // to Retrieve form data

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 

        $fullName = $_POST['full_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phone_number'];
        $password = $_POST['password'];

        // to insert form data into the "users" table

        $sql = "INSERT INTO users (full_name, username, email, phone_number, password)
                VALUES ('$fullName', '$username', '$email', '$phoneNumber', '$password')";


        // execute the sql query

        if (connection() -> query($sql) === TRUE) {

            // Redirect to login form after successful registration
            header("Location: login.php");
            exit;

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
    <title>Register</title>

    <!-- Links -->

    <!-- CSS -->
    <link rel="stylesheet" href="css/register.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Roboto+Slab:wght@700&family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">

</head>
<body>
    
    <div class= "register">

        <div class= "logo">

            <h2>Register</h2>

        </div>

        <div class= "regist-form">

            <form action="register.php" method="post">

                <div class= "user-details">

                    <div class= "input-box">

                        <span class= "details">Full Name</span>
                        <input type="text" name="full_name" placeholder="Please put your name here" required>

                    </div>

                    <div class= "input-box">

                        <span class= "details">Username</span>
                        <input type="text" name="username" placeholder="And your username here" required>

                    </div>

                    <div class= "input-box">

                        <span class= "details">Email</span>
                        <input type="text" name="email" placeholder="Finally your email here" required>

                    </div>

                    <div class= "input-box">

                        <span class= "details">Phone Number</span>
                        <input type="text" name="phone_number" placeholder="Now we want your phone number here" required>

                    </div>

                    <div class= "input-box">

                        <span class= "details">Password</span>
                        <input type="password" name="password" placeholder="Please put a strong password here" required>

                    </div>

                    <div class= "input-box">

                        <span class= "details">Confirm Password</span>
                        <input type="password" placeholder="Type the same password as before" required>

                    </div>

                </div>

                <div class= "gender-details">

                    <input type="radio" name="gender" id="dot-1">
                    <input type="radio" name="gender" id="dot-2">
                    <input type="radio" name="gender" id="dot-3">

                    <span class= "gender-title">Gender</span>

                    <div class= "category">

                        <label for="dot-1">

                            <span class= "dot one"></span>
                            <span class= "gender">Male</span>

                        </label>

                        <label for="dot-2">

                            <span class= "dot two"></span>
                            <span class= "gender">Female</span>

                        </label>

                        <label for="dot-3">

                            <span class= "dot three"></span>
                            <span class= "gender">I rather not say</span>

                        </label>

                    </div>

                </div>

                <div class= "button">

                    <input type="submit" name="submit" id="" value= "Submit">

                </div>

            </form>

        </div>

    </div>

</body>
</html>