<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js' integrity='sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>

<?php
    require('./Location.php');
    require('./DBConnection.php');
    session_start();

    if(isset($_POST['save_l_btn'])){
        mysqli_select_db($conn, 'vrms_info');

        $newPerson = $_SESSION['newPerson'];

        $client_id = $newPerson->getClientID();
        $house_no = $_POST['house_no'];
        $street = $_POST['street'];
        $barangay = (int) $_POST['barangay'];

        if($barangay != 0){
            $test = "SELECT `barangay_name` FROM `barangay_list` WHERE `barangay_id`='" . $barangay . "'";
            $testQuery = mysqli_query($conn, $test);
            $barangayName = mysqli_fetch_assoc($testQuery)['barangay_name'];
        }
        else{
            if(empty($_POST['barangay'])){
                $barangay = NULL;
                $barangayName = NULL;
            }
            else{
                $test = "SELECT `barangay_id` FROM `barangay_list` WHERE `barangay_name`='" . $_POST['barangay'] . "'";
                $testQuery = mysqli_query($conn, $test);
                $barangay = mysqli_fetch_assoc($testQuery)['barangay_id'];
            }
        }

        $zip_code = $_POST['zip_code'];
        $address_type = $_POST['address'];

        $newPerson->setHouseNo($house_no);
        $newPerson->setStreet($street);
        $newPerson->setBrgyID($barangay);
        $newPerson->setBrgyName($barangayName);
        $newPerson->setZipCode($zip_code);
        $newPerson->setAddressType($address_type);

        $query1 = "UPDATE `client_location` SET `house_no`='$house_no', `street`='$street', 
        `brgy_id`='$barangay', `zip_code`='$zip_code', `address_type`='$address_type' WHERE location_id='$client_id'";
        $checkQuery1 = mysqli_query($conn, $query1);

        // echo $client_id . "<br>";
        // echo $house_no . "<br>";
        // echo $street . "<br>";
        // echo $barangay . "<br>";
        // echo $zip_code . "<br>";
        // echo $address_type . "<br>";
        
        echo "
            <script>
                $('#loc input').prop('disabled', true);
                $('#edit_location').show();
                $('#save_location').hide();

                window.location.href = '../PHP/Profile.php';
            </script>
        ";
        exit(0);
    }
?>