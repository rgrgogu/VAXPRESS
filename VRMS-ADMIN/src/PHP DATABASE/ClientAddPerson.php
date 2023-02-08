<?php
    require('./DBConnection.php');
    session_start();

    if(isset($_POST['add_person'])){
        $last_name = $_POST['last_name'];
        $given_name = $_POST['given_name'];
        $middle_name = $_POST['middle_name'];
        $suffix = $_POST['suffix'];
        $birthdayObj = new DateTime($_POST['birthday']);
        $birthday = strval($birthdayObj->format("Y-m-d"));
        $today = new DateTime(date('y.m.d'));
        $age = $today->diff($birthdayObj)->y;
        $sex = $_POST['sex'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $philhealth = $_POST['philhealth'];
        $category = $_POST['category'];
        
        $city = "Quezon City";
        $house_number = $_POST['house_number'];
        $street = $_POST['street'];
        $barangay = $_POST['barangay'];
        $zip_code = $_POST['zip_code'];
        $address = $_POST['address'];

        // echo $client_id . "<br>";
        // echo $last_name . "<br>";
        // echo $given_name. "<br>";
        // echo $middle_name . "<br>";
        // echo $birthday . "<br>";
        // echo $sex . "<br>";
        // echo $email . "<br>";
        // echo $contact . "<br>";
        // echo $philhealth . "<br>";
        // echo $category . "<br>";

        // echo $city . "<br>";
        // echo $house_number . "<br>";
        // echo $street . "<br>";
        // echo $barangay . "<br>";
        // echo $zip_code . "<br>";
        // echo $address . "<br>";

        $bool1 = false;
        $bool2 = false;
        $bool3 = false;
        $bool4 = false;

        mysqli_select_db($conn, 'vrms_info');

        $query = "SELECT MAX(client_id) as client_id FROM client_info";
        $check = mysqli_query($conn, $query);

        $client_id = mysqli_fetch_assoc($check)['client_id'] + 1;

        if(isset($_POST['first_dosage'])){
            $vax_date_1D = $_POST['vax_date_1D'];
            $first_dose_manufacturer = $_POST['1stDose_manufacturer'];
            $vax_lot_1D = $_POST['vax_lot_1D'];
            $vax_name_1D = $_POST['vax_name_1D'];
            $vax_approved_1D = $_POST['vax_approved_1D'];
            $bool1 = true;
            
            // echo $vax_date_1D . "<br>";
            // echo $first_dose_manufacturer . "<br>";
            // echo $vax_lot_1D . "<br>";
            // echo $vax_name_1D . "<br>";
            // echo $vax_approved_1D . "<br>";
            // echo $bool1 . "<br>";
            $query1 = "INSERT INTO first_dose VALUES('$client_id', '$vax_date_1D', '$first_dose_manufacturer', 
            '$vax_lot_1D', '$vax_name_1D', '$vax_approved_1D')";
            $checkQuery1 = mysqli_query($conn, $query1);
        }

        if(isset($_POST['second_dosage'])){
            $vax_date_2D = $_POST['vax_date_2D'];
            $second_dose_manufacturer = $_POST['2ndDose_manufacturer'];
            $vax_lot_2D = $_POST['vax_lot_2D'];
            $vax_name_2D = $_POST['vax_name_2D'];
            $vax_approved_2D = $_POST['vax_approved_2D'];
            $bool2 = true;
            
            // echo $vax_date_2D . "<br>";
            // echo $second_dose_manufacturer . "<br>";
            // echo $vax_lot_2D . "<br>";
            // echo $vax_name_2D . "<br>";
            // echo $vax_approved_2D . "<br>";
            // echo $bool2 . "<br>";
            $query2 = "INSERT INTO second_dose VALUES('$client_id', '$vax_date_2D', '$second_dose_manufacturer', 
            '$vax_lot_2D', '$vax_name_2D', '$vax_approved_2D')";
            $checkQuery2 = mysqli_query($conn, $query2);
        }

        if(isset($_POST['first_booster'])){
            $vax_date_1B = $_POST['vax_date_1B'];
            $first_booster_manufacturer = $_POST['1stBooster_manufacturer'];
            $vax_lot_1B = $_POST['vax_lot_1B'];
            $vax_name_1B = $_POST['vax_name_1B'];
            $vax_approved_1B = $_POST['vax_approved_1B'];
            $bool3 = true;

            // echo $vax_date_1B . "<br>";
            // echo $first_booster_manufacturer . "<br>";
            // echo $vax_lot_1B . "<br>";
            // echo $vax_name_1B . "<br>";
            // echo $vax_approved_1B . "<br>";
            // echo $bool3 . "<br>";
            $query3 = "INSERT INTO first_booster VALUES('$client_id', '$vax_date_1B', '$first_booster_manufacturer', 
            '$vax_lot_1B', '$vax_name_1B', '$vax_approved_1B')";
            $checkQuery3 = mysqli_query($conn, $query3);
        }

        if(isset($_POST['second_booster'])){
            $vax_date_2B = $_POST['vax_date_2B'];
            $second_booster_manufacturer = $_POST['2ndBooster_manufacturer'];
            $vax_lot_2B = $_POST['vax_lot_2B'];
            $vax_name_2B = $_POST['vax_name_2B'];
            $vax_approved_2B = $_POST['vax_approved_2B'];
            $bool4 = true;

            // echo $vax_date_2B . "<br>";
            // echo $second_booster_manufacturer . "<br>";
            // echo $vax_lot_2B . "<br>";
            // echo $vax_name_2B . "<br>";
            // echo $vax_approved_2B . "<br>";
            // echo $bool4 . "<br>";

            $query4 = "INSERT INTO second_booster VALUES('$client_id', '$vax_date_2B', '$first_booster_manufacturer', 
            '$vax_lot_2B', '$vax_name_2B', '$vax_approved_2B')";
            $checkQuery4 = mysqli_query($conn, $query4);
        }

        $query5 = "INSERT INTO `health_details`(`category_id`, `philhealth_id`, `first_dose_id`, `second_dose_id`, `first_booster_id`, `second_booster_id`) 
        VALUES ('$category','$philhealth'," . ($bool1 ? '\''. $client_id . '\'' : 'NULL') . "," . ($bool2 ? '\'' . $client_id . '\'' : 'NULL') . "," . ($bool3 ? '\'' . $client_id . '\'' : 'NULL') . "," . ($bool4 ? '\'' . $client_id . '\'' : 'NULL') . ")";
        $checkQuery5 = mysqli_query($conn, $query5);

        $query6 = "INSERT INTO `client_location`(`city`, `house_no`, `street`, `brgy_id`, `zip_code`, `address_type`) 
        VALUES ('$city', '$house_number', '$street', '$barangay', '$zip_code', '$address')";
        $checkQuery6 = mysqli_query($conn, $query6);

        $query7 = "INSERT INTO `client_info`(`last_name`, `given_name`, `middle_name`, `suffix`, `sex`, `birthday`, `age`, `contact`, `email`)
        VALUES ('$last_name', '$given_name', '$middle_name', '$suffix', '$sex', '$birthday', '$age', '$contact', '$email')";
        $checkQuery7 = mysqli_query($conn, $query7);

        echo "
        <script>
            window.location.href = '../PHP/ClientCRUD.php';
        </script>
        ";
        exit(0);
    }
