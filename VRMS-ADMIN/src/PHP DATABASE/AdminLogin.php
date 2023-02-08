<?php
session_start();
include('./DBConnection.php');
require('../PHP CLASSES/AdminAcc.php');

if (isset($_POST['btnLogin'])) {
    $username = $_POST['txtLUsername'];
    $password = $_POST['txtLPassword'];

    mysqli_select_db($conn, 'vrms_admin');

    $query = "SELECT * FROM user_acc WHERE username='$username' AND password='$password'";

    try {
        $checkQuery = mysqli_query($conn, $query);

        if (mysqli_num_rows($checkQuery) != 0) {
            $arr_admin_acc = mysqli_fetch_array($checkQuery);
            $admin_id = $arr_admin_acc[0];

            $query1 = "SELECT * FROM user_info WHERE admin_id='$admin_id'";
            $query2 = "SELECT * FROM user_socmed WHERE admin_id='$admin_id'";

            try {
                $checkQuery1 = mysqli_query($conn, $query1);
                $checkQuery2 = mysqli_query($conn, $query2);

                $arr_admin_info = mysqli_fetch_array($checkQuery1);
                $arr_socmed = mysqli_fetch_array($checkQuery2);
                
                // print_r($arr_socmed);
                // echo ($arr_socmed[0]) . "<br>";
                // echo ($arr_socmed[1]) . "<br>";
                // echo ($arr_socmed[2]) . "<br>";
                // echo ($arr_socmed[3]) . "<br>";
                // echo ($arr_socmed[4]) . "<br>";
                // echo ($arr_socmed[5]) . "<br>";

                $adminPerson = new AdminAcc($arr_admin_info, $arr_admin_acc, $arr_socmed);

                $_SESSION['object'] = $adminPerson;
                header('Location: ../PHP/Preloader.php');
                exit(0);
            } catch (Exception $e) {
                $_SESSION['message'] = 'Something went wrong!';
                header('Location: ../../index.php');
                exit(0);
            }
        } else {
            $_SESSION['message'] = 'Invalid username or password! Try again!';
            header('Location: ../../index.php');
            exit(0);
        }
    } catch (Exception $e) {
        $_SESSION['message'] = 'Something went wrong';
        header('Location: ../../index.php');
        exit(0);
    }
}
?>
<script src="../JS/Actions.js"></script>