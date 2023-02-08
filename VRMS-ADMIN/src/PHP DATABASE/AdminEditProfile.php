<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js' integrity='sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>

<?php
require('../PHP CLASSES/AdminAcc.php');
require('./DBConnection.php');
session_start();

if (isset($_POST['save_btn'])) {
    $admin = $_SESSION['object'];
    $admin_id = $admin->getAdminID();
    $given_name = $_POST['given_name'];
    $middle_name = $_POST['middle_name'];
    $surname = $_POST['surname'];
    $suffix = $_POST['suffix'];
    $sex = $_POST['sex'];
    $birthdayObj = new DateTime($_POST['birthday']);
    $birthday = strval($birthdayObj->format("Y-m-d"));
    $today = new DateTime(date('y.m.d'));
    $age = $today->diff($birthdayObj)->y;
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $department = $_POST['department'];
    $email = $admin->getEmail();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $admin->setUsername($username);
    $admin->setPassword($password);

    $admin->setGivenName($given_name);
    $admin->setMiddleName($middle_name);
    $admin->setLastName($surname);
    $admin->setSuffix($suffix);
    $admin->setSex($sex);
    $admin->setBirthday($birthday);
    $admin->setAge($age);
    $admin->setAddress($address);
    $admin->setContact($contact);
    $admin->setDepartment($department);
    $admin->setEmail($email);

    mysqli_select_db($conn, 'vrms_admin');

    try {
        $query2 = "UPDATE user_acc SET username='$username', password='$password' WHERE acc_id='$admin_id'";
        $query_run2 = mysqli_query($conn, $query2);

        $query3 = "UPDATE user_info SET last_name='$surname', 
            given_name='$given_name', middle_name='$middle_name', 
            suffix='$suffix', sex='$sex', birthday='$birthday', age='$age', 
            address='$address', contact='$contact', department='$department', 
            email='$email' WHERE admin_id='$admin_id'";
        $query_run3 = mysqli_query($conn, $query3);

        $_SESSION['object'] = $admin;

        echo "
        <script>
            $('#edit_profile input').prop('disabled', true);
            $('#sex_select').prop('hidden', true);
            $('#department_select').prop('hidden', true);
            $('#sex_input').show();
            $('#department_input').show();
            $('#save_btn').hide();
            $('#edit_btn').show();
            $('#edit_profile input').css({
                'border-color': 'none',
                'border-width': '0px',
                'border-style': 'transparent'
            });

            window.location.href = '../PHP/Profile.php';
        </script>
        ";

        exit(0);
    } catch (Exception $e) {
        $_SESSION['message'] = "Something went wrong!";
        header('Location: ../PHP/Profile.php');
        exit(0);
    }
}
