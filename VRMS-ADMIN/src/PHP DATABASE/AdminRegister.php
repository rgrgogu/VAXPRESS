<?php
    session_start();
    require('./DBConnection.php');

    // ADMIN REGISTER VARIABLES
    $lastName = "";
    $firstName = "";
    $middleName = "";
    $suffix = "";
    $sex = "";
    $birthday = "";
    $age = "";
    $address = "";
    $mobileNumber = "";
    $department = "";
    $emailAddress = "";
    $username = "";
    $password = "";
    $confirmPassword = ""; 

    // REGISTER ADMIN ACCOUNT
    if(isset($_POST['btnRegister'])){
        $lastName = $_POST['lName'];
        $firstName = $_POST['fName'];
        $middleName = $_POST['mName'] == null ? null : $_POST['mName'];
        $suffix = $_POST['suffix'] == null ? null : $_POST['suffix'];
        $sex = $_POST['sex'];
        $birthdayObj = new DateTime($_POST['bday']);
        $birthday = strval($birthdayObj->format("Y-m-d"));
        $today = new DateTime(date('y.m.d'));
        $age = $today->diff($birthdayObj)->y;
        $address = $_POST['address'];
        $mobileNumber = $_POST['contact'];
        $department = $_POST['department'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if($password == $confirmPassword){
            // echo $lastName . "<br>";
            // echo $firstName . "<br>";
            // echo $middleName . "<br>";
            // echo $suffix . "<br>";
            // echo $sex . "<br>";
            // echo $birthday . "<br>";
            // echo $age . "<br>";
            // echo $address . "<br>";
            // echo $mobileNumber . "<br>";
            // echo $department . "<br>";
            // echo $email . "<br>";
            // echo $username . "<br>";
            // echo $password . "<br>";

            mysqli_select_db($conn, 'vrms_admin');

            $query = "SELECT last_name, given_name, middle_name FROM user_info WHERE last_name='$lastName' AND given_name = '$firstName' AND middle_name='$middleName';";
            $query1 = "SELECT username FROM user_acc WHERE username = '$username'";
            $query2 = "INSERT INTO `user_acc`(`username`, `password`) VALUES ('$username','$password');";
            $query3 = "INSERT INTO `user_info`(`last_name`, `given_name`, `middle_name`, `suffix`, `sex`, `birthday`, 
            `age`, `address`, `contact`, `department`, `email`) VALUES ('$lastName','$firstName','$middleName','$suffix',
            '$sex','$birthday','$age', '$address', '$mobileNumber','$department','$email');";

            try{
                $checkQuery = mysqli_query($conn, $query);
                
                if(mysqli_num_rows($checkQuery) == 0){
                    $checkQuery1 = mysqli_query($conn, $query1);

                    if(mysqli_num_rows($checkQuery1) == 0){
                        $checkQuery2 = mysqli_query($conn, $query2);
                        $checkQuery3 = mysqli_query($conn, $query3);
                        $_SESSION['message'] = "Registered Successfully!";
                        header('Location: ../../index.php');
                        exit(0);
                    }
                    else{
                        $_SESSION['message'] = "Account has been registered in the system! Try again!";
                        header('Location: ../PHP/Register.php');
                        exit(0);
                    }
                }
                else{
                    $_SESSION['message'] = "Account has been registered in the system! Try again!";
                    header('Location: ../PHP/Register.php');
                    exit(0);
                }
            }catch (Exception $e){
                $_SESSION['message'] = "Something went wrong! Please contact the administrator!";
                header('Location: ../../index.php');
                exit(0);
            }
        }
        else{
            $_SESSION['message'] = "Password do not matched!";
            header('Location: ../../Register.php');
            exit(0);
        }
    }
    else{
        header('Location: ../../index.php');
        exit(0);
    }
?>