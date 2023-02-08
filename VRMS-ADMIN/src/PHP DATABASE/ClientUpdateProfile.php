<?php
    require('./DBConnection.php');
    session_start();

    if(isset($_GET['id'])){
        $client_id = $_GET['id'];

        if(isset($_POST['edit_person'])){
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
            $category = (int) $_POST['category'];
            
            $city = "Quezon City";
            $house_number = $_POST['house_number'];
            $street = $_POST['street'];
            $barangay = (int) $_POST['barangay'];

            mysqli_select_db($conn, 'vrms_info');

            if($category != 0){
                $category = $category;
            }
            else{
                if(empty($_POST['category'])){
                    $category = NULL;
                }
                else{
                    $test = "SELECT `category_id` FROM `client_category` WHERE `category_name`='" . $_POST['category'] . "'";
                    $testQuery = mysqli_query($conn, $test);
                    $category = mysqli_fetch_assoc($testQuery)['category_id'];
                }
            }
            
            if($barangay != 0){
                $barangay = $barangay;
            }
            else{
                if(empty($_POST['barangay'])){
                    $barangay = NULL;
                }
                else{
                    $test = "SELECT `barangay_id` FROM `barangay_list` WHERE `barangay_name`='" . $_POST['barangay'] . "'";
                    $testQuery = mysqli_query($conn, $test);
                    $barangay = mysqli_fetch_assoc($testQuery)['barangay_id'];
                }
            }

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
    
            $vax_date_1D = $_POST['vax_date_1D'];
            $first_dose_manufacturer = (int) $_POST['1stDose_manufacturer'];

            if($first_dose_manufacturer != 0){
                $first_dose_manufacturer = $first_dose_manufacturer;
            }
            else{
                if(empty($_POST['1stDose_manufacturer'])){
                    $first_dose_manufacturer = NULL;
                }
                else{
                    $test = "SELECT `manufacturer_id` FROM `manufacturer` WHERE `manufacturer_name`='" . $_POST['1stDose_manufacturer'] . "'";
                    $testQuery = mysqli_query($conn, $test);
                    $first_dose_manufacturer = mysqli_fetch_assoc($testQuery)['manufacturer_id'];
                }
            }

            $vax_lot_1D = $_POST['vax_lot_1D'];
            $vax_name_1D = $_POST['vax_name_1D'];
            $vax_approved_1D = $_POST['vax_approved_1D'];
            
            // // echo $vax_date_1D . "<br>";
            // // echo $first_dose_manufacturer . "<br>";
            // // echo $vax_lot_1D . "<br>";
            // // echo $vax_name_1D . "<br>";
            // // echo $vax_approved_1D . "<br>";
            // // echo $bool1 . "<br>";

            $sql1 = "SELECT first_dose_id FROM first_dose WHERE first_dose_id = '$client_id'";
            $check1 = mysqli_query($conn, $sql1);

            if(mysqli_num_rows($check1) > 0){
                $query1 = "UPDATE first_dose SET vaccine_date='$vax_date_1D', manufacturer='$first_dose_manufacturer', 
                lot_number='$vax_lot_1D', vaccinator='$vax_name_1D', approved_by='$vax_approved_1D'
                WHERE first_dose_id='$client_id'";
                $checkQuery1 = mysqli_query($conn, $query1);
                $bool1 = false;
            }
            else{
                $a1 = empty($vax_date_1D) ? 1 : 0;
                $a2 = empty($first_dose_manufacturer) ? 1 : 0;
                $a3 = empty($vax_lot_1D) ? 1 : 0;
                $a4 = empty($vax_name_1D) ? 1 : 0;
                $a5 = empty($vax_approved_1D) ? 1 : 0;

                // echo $a1;
                // echo $a2;
                // echo $a3;
                // echo $a4;
                // echo $a5;

                if($a1 && $a2 && $a3 && $a4 && $a5){
                    $bool1 = true;
                }
                else{
                    $query1 = "INSERT INTO first_dose VALUES('$client_id', '$vax_date_1D', '$first_dose_manufacturer', 
                    '$vax_lot_1D', '$vax_name_1D', '$vax_approved_1D')";
                    $checkQuery1 = mysqli_query($conn, $query1);
                    $bool1 = false;
                }
            }
                
            $vax_date_2D = $_POST['vax_date_2D'];
            $second_dose_manufacturer = (int) $_POST['2ndDose_manufacturer'];

            if($second_dose_manufacturer != 0){
                $second_dose_manufacturer = $second_dose_manufacturer;
            }
            else{
                if(empty($_POST['2ndDose_manufacturer'])){
                    $second_dose_manufacturer = NULL;
                }
                else{
                    $test = "SELECT `manufacturer_id` FROM `manufacturer` WHERE `manufacturer_name`='" . $_POST['2ndDose_manufacturer'] . "'";
                    $testQuery = mysqli_query($conn, $test);
                    $second_dose_manufacturer = mysqli_fetch_assoc($testQuery)['manufacturer_id'];
                }
            }

            $vax_lot_2D = $_POST['vax_lot_2D'];
            $vax_name_2D = $_POST['vax_name_2D'];
            $vax_approved_2D = $_POST['vax_approved_2D'];
                
            // // echo $vax_date_2D . "<br>";
            // // echo $second_dose_manufacturer . "<br>";
            // // echo $vax_lot_2D . "<br>";
            // // echo $vax_name_2D . "<br>";
            // // echo $vax_approved_2D . "<br>";
            // // echo $bool2 . "<br>";

            $sql2 = "SELECT second_dose_id FROM second_dose WHERE second_dose_id = '$client_id'";
            $check2 = mysqli_query($conn, $sql2);

            if(mysqli_num_rows($check2) > 0){
                $query2 = "UPDATE second_dose SET vaccine_date='$vax_date_2D', manufacturer='$second_dose_manufacturer', 
                lot_number='$vax_lot_2D', vaccinator='$vax_name_2D', approved_by='$vax_approved_2D' WHERE second_dose_id='$client_id'";
                $checkQuery2 = mysqli_query($conn, $query2);
                $bool2 = false;
            }
            else{
                $b1 = empty($vax_date_2D) ? 1 : 0;
                $b2 = empty($second_dose_manufacturer) ? 1 : 0;
                $b3 = empty($vax_lot_2D) ? 1 : 0;
                $b4 = empty($vax_name_2D) ? 1 : 0;
                $b5 = empty($vax_approved_2D) ? 1 : 0;

                // echo $a1;
                // echo $a2;
                // echo $a3;
                // echo $a4;
                // echo $a5;

                if($b1 && $b2 && $b3 && $b4 && $b5){
                    $bool2 = true;
                }
                else{
                    $query2 = "INSERT INTO second_dose VALUES('$client_id', '$vax_date_2D', '$second_dose_manufacturer', 
                    '$vax_lot_2D', '$vax_name_2D', '$vax_approved_2D')";
                    $checkQuery2 = mysqli_query($conn, $query2);
                    $bool2 = false;
                }
            }
    
            $vax_date_1B = $_POST['vax_date_1B'];
            $first_booster_manufacturer = (int) $_POST['1stBooster_manufacturer'];

            if($first_booster_manufacturer != 0){
                $first_booster_manufacturer = $first_booster_manufacturer;
            }
            else{
                if(empty($_POST['1stBooster_manufacturer'])){
                    $first_booster_manufacturer = NULL;
                }
                else{
                    $test = "SELECT `manufacturer_id` FROM `manufacturer` WHERE `manufacturer_name`='" . $_POST['1stBooster_manufacturer'] . "'";
                    $testQuery = mysqli_query($conn, $test);
                    $first_booster_manufacturer = mysqli_fetch_assoc($testQuery)['manufacturer_id'];
                }
            }

            $vax_lot_1B = $_POST['vax_lot_1B'];
            $vax_name_1B = $_POST['vax_name_1B'];
            $vax_approved_1B = $_POST['vax_approved_1B'];

            // $vax_date_1B = "2022-10-25";
            // $first_booster_manufacturer = 1;
            // $vax_lot_1B = 3456789;
            // $vax_name_1B = "Russell Obsequio";
            // $vax_approved_1B = "QCGH";

            // echo $vax_date_1B . "<br>";
            // echo $first_booster_manufacturer . "<br>";
            // echo $vax_lot_1B . "<br>";
            // echo $vax_name_1B . "<br>";
            // echo $vax_approved_1B . "<br>";
            // echo $bool3 . "<br>";

            $sql3 = "SELECT first_booster_id FROM first_booster WHERE first_booster_id = '$client_id'";
            $check3 = mysqli_query($conn, $sql3);

            if(mysqli_num_rows($check3) > 0){
                $query3 = "UPDATE first_booster SET vaccine_date='$vax_date_1B', manufacturer_id='$first_booster_manufacturer', 
                lot_number='$vax_lot_1B', vaccinator='$vax_name_1B', approved_by='$vax_approved_1B' WHERE first_booster_id='$client_id'";
                $checkQuery3 = mysqli_query($conn, $query3);
                $bool3 = false;
            }
            else{
                $c1 = empty($vax_date_1B) ? 1 : 0;
                $c2 = empty($first_booster_manufacturer) ? 1 : 0;
                $c3 = empty($vax_lot_1B) ? 1 : 0;
                $c4 = empty($vax_name_1B) ? 1 : 0;
                $c5 = empty($vax_approved_1B) ? 1 : 0;

                // echo $a1;
                // echo $a2;
                // echo $a3;
                // echo $a4;
                // echo $a5;

                if($c1 && $c2 && $c3 && $c4 && $c5){
                    $bool3 = true;
                }
                else{
                    $query3 = "INSERT INTO first_booster VALUES('$client_id', '$vax_date_1B', '$first_booster_manufacturer', 
                    '$vax_lot_1B', '$vax_name_1B', '$vax_approved_1B')";
                    $checkQuery3 = mysqli_query($conn, $query3);
                    $bool3 = false;
                }
            }

            $vax_date_2B = $_POST['vax_date_2B'];
            $second_booster_manufacturer = (int) $_POST['2ndBooster_manufacturer'];

            if($second_booster_manufacturer != 0){
                $second_booster_manufacturer = $second_booster_manufacturer;
            }
            else{
                if(empty($_POST['2ndBooster_manufacturer'])){
                    $second_booster_manufacturer = NULL;
                }
                else{
                    $test = "SELECT `manufacturer_id` FROM `manufacturer` WHERE `manufacturer_name`='" . $_POST['2ndBooster_manufacturer'] . "'";
                    $testQuery = mysqli_query($conn, $test);
                    $second_booster_manufacturer = mysqli_fetch_assoc($testQuery)['manufacturer_id'];
                }
            }

            $vax_lot_2B = $_POST['vax_lot_2B'];
            $vax_name_2B = $_POST['vax_name_2B'];
            $vax_approved_2B = $_POST['vax_approved_2B'];

            // echo $vax_date_2B . "<br>";
            // echo $second_booster_manufacturer . "<br>";
            // echo $vax_lot_2B . "<br>";
            // echo $vax_name_2B . "<br>";
            // echo $vax_approved_2B . "<br>";
            // echo $bool4 . "<br>";

            $sql4 = "SELECT second_booster_id FROM second_booster WHERE second_booster_id = '$client_id'";
            $check4 = mysqli_query($conn, $sql4);

            if(mysqli_num_rows($check4) > 0){
                $query4 = "UPDATE second_booster SET vaccine_date='$vax_date_2B', manufacturer_id='$first_booster_manufacturer', 
                lot_number='$vax_lot_2B', vaccinator='$vax_name_2B', approved_by='$vax_approved_2B' WHERE second_booster_id='$client_id'";
                $checkQuery4 = mysqli_query($conn, $query4);
                $bool4 = false;
            }
            else{
                $d1 = empty($vax_date_2B) ? 1 : 0;
                $d2 = empty($second_booster_manufacturer) ? 1 : 0;
                $d3 = empty($vax_lot_2B) ? 1 : 0;
                $d4 = empty($vax_name_2B) ? 1 : 0;
                $d5 = empty($vax_approved_2B) ? 1 : 0;

                if($d1 && $d2 && $d3 && $d4 && $d5){
                    $bool4 = true;
                }
                else{
                    $query4 = "INSERT INTO second_booster VALUES('$client_id', '$vax_date_2B', '$first_booster_manufacturer', 
                    '$vax_lot_2B', '$vax_name_2B', '$vax_approved_2B')";
                    $checkQuery4 = mysqli_query($conn, $query4);
                    $bool4 = false;
                }
            }

            $query7 = "UPDATE `client_info` SET `last_name`='$last_name', `given_name`='$given_name', `middle_name`='$middle_name',
            `suffix`='$suffix', `sex`='$sex', `birthday`='$birthday', `age`='$age', `contact`='$contact', `email`='$email' WHERE client_id='$client_id'";
            $checkQuery7 = mysqli_query($conn, $query7);

            // $sql = "SELECT `barangay_id` FROM `barangay_list` WHERE `barangay_name` = '$barangay'";
            // $sqlQuery1 = mysqli_query($conn, $sql);
            // $barangay_id = mysqli_fetch_assoc($sqlQuery1)['barangay_id'];

            $query6 = "UPDATE `client_location` SET `city`='$city', `house_no`='$house_number', `street`='$street', 
            `brgy_id`='$barangay', `zip_code`='$zip_code', `address_type`='$address' WHERE location_id='$client_id'";
            $checkQuery6 = mysqli_query($conn, $query6);
            
            $query5 = "SELECT `first_dose_id`, `second_dose_id`, `first_booster_id`, `second_booster_id` FROM `health_details` WHERE `health_id` = '$client_id'";
            $check5 = mysqli_query($conn, $query5);
            $arr = mysqli_fetch_assoc($check5);

            // echo $arr['first_dose_id'];
            // echo $arr['second_dose_id'];
            // echo $arr['first_booster_id'];
            // echo $arr['second_booster_id'] . "<br>";
            
            $val1 = is_null($arr['first_dose_id']) ? NULL : $arr['first_dose_id'];
            $val2 = is_null($arr['second_dose_id']) ? NULL : $arr['second_dose_id'];
            $val3 = is_null($arr['first_booster_id']) ? NULL : $arr['first_booster_id'];
            $val4 = is_null($arr['second_booster_id']) ? NULL : $arr['second_booster_id'];
            
            $query5 = "UPDATE health_details SET category_id = '$category', philhealth_id = '$philhealth' WHERE health_id = '$client_id'";
            $checkQuery5 = mysqli_query($conn, $query5);

            if($val1 == NULL && $bool1 == false){
                $query6 = "UPDATE health_details SET first_dose_id = '$client_id' WHERE health_id = '$client_id'";
                $checkQuery6 = mysqli_query($conn, $query6);
            }
            else if ($val1 != NULL && $bool1 == false){
                $query6 = "UPDATE health_details SET first_dose_id = '$val1' WHERE health_id = '$client_id'";
                $checkQuery6 = mysqli_query($conn, $query6);
            }

            if($val2 == NULL && $bool2 == false){
                $query7 = "UPDATE health_details SET second_dose_id = '$client_id' WHERE health_id = '$client_id'";
                $checkQuery7 = mysqli_query($conn, $query7);
            }
            else if ($val2 != NULL && $bool2 == false){
                $query7 = "UPDATE health_details SET second_dose_id = '$val2' WHERE health_id = '$client_id'";
                $checkQuery7 = mysqli_query($conn, $query7);
            }

            if($val3 == NULL && $bool3 == false){
                $query8 = "UPDATE health_details SET first_booster_id = '$client_id' WHERE health_id = '$client_id'";
                $checkQuery8 = mysqli_query($conn, $query8);
            }
            else if($val3 != NULL && $bool3 == false){
                $query8 = "UPDATE health_details SET first_booster_id = '$val3' WHERE health_id = '$client_id'";
                $checkQuery8 = mysqli_query($conn, $query8);
            }

            if($val4 != NULL){
                $query9 = "UPDATE health_details SET second_booster_id = '$client_id' WHERE health_id = '$client_id'";
                $checkQuery9 = mysqli_query($conn, $query9);
            }
            else if($val4 != NULL && $bool4 == false){
                $query9 = "UPDATE health_details SET second_booster_id = '$val4' WHERE health_id = '$client_id'";
                $checkQuery9 = mysqli_query($conn, $query9);
            }
    
            echo "
            <script>
                window.location.href = '../PHP/ClientCRUD.php';
            </script>
            ";
            exit(0);
        }
    }
