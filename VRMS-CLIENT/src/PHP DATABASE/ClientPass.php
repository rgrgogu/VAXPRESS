<?php
session_start();
require('./DBConnection.php');

// UPDATE FORGOT PASSWORD
if(isset($_POST['btnUpdate'])){
    $client_id = $_SESSION['client_id'];
    $password = $_POST['NPass'];
    $confirmPassword = $_POST['RPass'];

    if($password == $confirmPassword){
        // echo $admin_id . "<br>";
        // echo $username . "<br>";
        // echo $password . "<br>";
        // echo $confirmPassword . "<br>";

        mysqli_select_db($conn, 'vrms_client');

        $query = "UPDATE `user_acc` SET `password`='$password' WHERE `acc_id`='$client_id'";
        
        try{
            $checkQuery = mysqli_query($conn, $query);

            $_SESSION['message'] = 'Account Updated Successfully!';
            header('Location: ../../index.php');
            exit(0);
        }catch(Exception $e){
            $_SESSION['message'] = "Something went wrong! Please contact the administrator";
            header('Location: ../PHP/UpdatePassword.php');
            exit(0);
        }
    }
    else{
        $_SESSION['message'] = "Incorrect Password! Please try again!";
        header('Location: ../PHP/UpdatePassword.php');
        exit(0);
    }
}
?>
