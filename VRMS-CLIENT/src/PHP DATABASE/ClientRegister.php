<?php
session_start();
include('./DBConnection.php');

// REGISTER ACCOUNT VARIABLES
$username = "";
$password = "";
$confirmPass = "";
$age = "";
$birthday = "";
$email = "";

// REGISTER ACCOUNT
if (isset($_POST['btnRCreate'])) {
    mysqli_select_db($conn, 'vrms_info');

    $email = $_POST['txtREmail'];
    $query = "SELECT email FROM client_info WHERE email='$email'";
    $checkQuery = mysqli_query($conn, $query);

    if(mysqli_num_rows($checkQuery) > 0){
        mysqli_select_db($conn, 'vrms_client');

        $query1 = "SELECT email FROM user_acc WHERE email='$email'";
        $checkQuery1 = mysqli_query($conn, $query1);

        if(mysqli_num_rows($checkQuery1) == 0){
            $last_name = $_POST['txtRLastName'];
            $given_name = $_POST['txtRGivenName'];
            $middle_name = $_POST['txtRMiddleName'];
            $password = $_POST['txtRPassword'];
            $confirmPass = $_POST['txtRConfirm'];
            $bday = $_POST['txtRBday'];

            if ($password == $confirmPass) {
                $query2 = "INSERT INTO user_acc(`email`,`password`) VALUES('$email', '$password')";
                $query3 = "INSERT INTO `user_info`(`last_name`, `given_name`, `middle_name`, `birthday`) 
                VALUES ('$last_name','$given_name','$middle_name','$bday')";

                try {
                    $checkQuery2 = mysqli_query($conn, $query2);
                    $checkQuery3 = mysqli_query($conn, $query3);

                    $_SESSION['message'] = "Registered Successfully!";
                    header('Location: ../../index.php');
                    exit(0);
                } catch (Exception $e) {
                    $_SESSION['message'] = "Something went wrong! Please contact the administrator!";
                    header('Location: ../../index.php');
                    exit(0);
                }
            } else {
                $_SESSION['message'] = "Password do not matched";
                header('Location: ../../index.php');
                exit(0);
            }
        }
        else{
            $_SESSION['message'] = "Email is already registered in the system!";
            header('Location: ../../index.php');
            exit(0);
        }
    }
    else{
        $_SESSION['message'] = 'Please contact the VAXpress administration to register your process!';
        header('Location: ../../index.php');
        exit(0);
    }
} else {
    header('Location: ../../index.php');
    exit(0);
}
