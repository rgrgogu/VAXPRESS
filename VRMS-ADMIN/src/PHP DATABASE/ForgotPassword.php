<?php
session_start();
require('./DBConnection.php');

// ADMIN REGISTER VARIABLES
$lastName = "";
$firstName = "";
$middleName = "";
$emailAddress = "";
$password = "";

// FORGOT PASSWORD
if (isset($_POST['btnFSubmit'])) {
    $lastName = $_POST['txtFLName'];
    $firstName = $_POST['txtFGName'];
    $middleName = $_POST['txtFMName'] == null ? null : $_POST['txtFMName'];
    $email = $_POST['txtFEmail'];
    $password = $_POST['txtFPass'];

    // echo $lastName . "<br>";
    // echo $firstName . "<br>";
    // echo $middleName . "<br>";
    // echo $email . "<br>";
    // echo $password . "<br>";

    mysqli_select_db($conn, 'vrms_admin');

    $query = "SELECT admin_id, last_name, given_name, middle_name FROM user_info WHERE last_name = '$lastName' 
        AND given_name='$firstName' AND middle_name='$middleName' AND email = '$email'";

    try {
        $checkQuery = mysqli_query($conn, $query);

        if (mysqli_num_rows($checkQuery) != 0) {
            $_SESSION['admin_id'] = $checkQuery->fetch_assoc()['admin_id'];
            header('Location: ../PHP/UpdatePassword.php');
            exit(0);
        } else {
            $_SESSION['message'] = "Account not found!";
            header('Location: ../../index.php');
            exit(0);
        }
    } catch (Exception $e) {
        $_SESSION['message'] = "Something went wrong! Please contact the head administrator!";
        header('Location: ../../index.php');
        exit(0);
    }
} else {
    header('Location: ../../index.php');
    exit(0);
}

?>