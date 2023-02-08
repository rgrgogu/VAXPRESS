<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js' integrity='sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>

<?php
    require('./Location.php');
    require('./DBConnection.php');
    session_start();

    if(isset($_POST['save_p_btn'])){
        mysqli_select_db($conn, 'vrms_info');

        $newPerson = $_SESSION['newPerson'];
        $client_id = $newPerson->getClientID();

        $given_name = $_POST['given_name'];
        $middle_name = $_POST['middle_name'];
        $surname = $_POST['last_name'];
        $suffix = $_POST['suffix'];
        $sex = $_POST['sex'];
        $birthdayObj = new DateTime($_POST['birthday']);
        $birthday = strval($birthdayObj->format("Y-m-d"));
        $today = new DateTime(date('y.m.d'));
        $age = $today->diff($birthdayObj)->y;
        $contact = $_POST['contact'];
        $email = $newPerson->getEmail();

        $newPerson->setGivenName($given_name);
        $newPerson->setMiddleName($middle_name);
        $newPerson->setLastName($surname);
        $newPerson->setSuffix($suffix);
        $newPerson->setSex($sex);
        $newPerson->setBirthday($birthday);
        $newPerson->setAge($age);
        $newPerson->setContact($contact);

        $query1 = "UPDATE client_info SET last_name='$surname', 
            given_name='$given_name', middle_name='$middle_name', 
            suffix='$suffix', sex='$sex', birthday='$birthday', age='$age', 
            contact='$contact' WHERE client_id='$client_id'";
        $query_run = mysqli_query($conn, $query1);


        mysqli_select_db($conn, 'vrms_client');
        $query2 = "UPDATE user_info SET last_name='$surname', 
            given_name='$given_name', middle_name='$middle_name', 
            birthday='$birthday' WHERE client_id='$client_id'";
        $query_run1 = mysqli_query($conn, $query2);

        // echo $client_id . "<br>";
        // echo $house_no . "<br>";
        // echo $street . "<br>";
        // echo $barangay . "<br>";
        // echo $zip_code . "<br>";
        // echo $address_type . "<br>";

        echo "
            <script>
                $('#info input').prop('disabled', true);
                $('#edit_personal').show();
                $('#save_personal').hide();
                $('#sex').hide();
                $('#sex_input').show();

                window.location.href = '../PHP/Profile.php';
            </script>
        ";
        exit(0);
    }
?>