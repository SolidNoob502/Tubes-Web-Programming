<?php 

    require 'function.php';

    //to Retrieve form data

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST['username'];
        $password = $_POST['password'];

        // to insert form data into the "users" table

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = connection() -> query($sql);

        // execute the sql query

        if ($result -> num_rows === 1) {

            // Redirect to index upon successful login

            header("Location: index.after.php");
            exit;

        } else {

            echo "Invalid username or password!";

        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Links -->

    <!-- CSS -->
    <link rel="stylesheet" href="css/login.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Roboto+Slab:wght@700&family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class= "login">

        <div class= "logo">

            <h2>Login</h2>

        </div>

        <div class= "login-form">

            <form action="login.php" method="post">

                <div class= "user-details">

                    <div class= "input-box">

                        <span class= "details">Username</span>
                        <input type="text" name="username" placeholder="Username/Email">

                    </div>

                    <div class= "input-box">

                        <span class= "details">Password</span>
                        <input type="password" name="password" placeholder="Password">

                    </div>

                </div>

                <div class= "statements">

                    <div class= "forgot-password">

                        <p>Forgot your password?<a href="#">Click here to help you remember</a></p>

                    </div>
                    
                    <div class= "member">

                        <p>Don't have an account?<a href="register.php">Make one now here</a></p>

                    </div>

                </div>

                <div class= "button">

                    <input type="submit" name="" id="" value= "Login">

                </div>

            </form>

        </div>

    </div>

</body>
</html>