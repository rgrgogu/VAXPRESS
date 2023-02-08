<?php
session_start();
require('./DBConnection.php');

// UPDATE FORGOT PASSWORD
if(isset($_POST['btnUpdate'])){
    $admin_id = $_SESSION['admin_id'];
    $username = $_POST['UName'];
    $password = $_POST['NPass'];
    $confirmPassword = $_POST['RPass'];

    if($password == $confirmPassword){
        // echo $admin_id . "<br>";
        // echo $username . "<br>";
        // echo $password . "<br>";
        // echo $confirmPassword . "<br>";

        mysqli_select_db($conn, 'vrms_admin');

        $query = "UPDATE `user_acc` SET `username`='$username', `password`='$password' WHERE `acc_id`='$admin_id'";
        
        try{
            $checkQuery = mysqli_query($conn, $query);

            $_SESSION['message'] = 'Account Updated Successfully!';
            header('Location: ../../index.php');
            exit(0);
        }catch(Exception $e){
            $_SESSION['message'] = "Something went wrong! Please contact the head administrator";
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
