<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // // call mysqli connection to database
    // mysqli_select_db($con, 'vrms_admin');

    // // close connection
    // mysqli_close($con);
?>
