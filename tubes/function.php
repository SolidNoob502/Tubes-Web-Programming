<?php 

    define('BASE_URL', 'http://localhost/pw2023_223040122/');

    function connection() {

        $conn = mysqli_connect("localhost", "root", "", "tubes");
        return $conn;

    }

    // if connection fails

    
    if (connection() -> connect_error) {

        die('Connection Unsuccessful: ' . $conn -> connect_error);

    }

?>