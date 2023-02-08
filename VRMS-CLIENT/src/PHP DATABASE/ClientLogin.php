<?php
session_start();
include('./DBConnection.php');
require('./Location.php');
require('./HealthDetails.php');
require('./Dosage.php');

// LOGIN ACCOUNT
if (isset($_POST['btnLogin'])) {
    mysqli_select_db($conn, 'vrms_client');
    $email = $_POST['txtLEmail'];
    $password = $_POST['txtLPassword'];

    $query = "SELECT * FROM user_acc WHERE email='$email' AND password='$password'"; 
    
    try {
        $checkQuery = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($checkQuery) > 0){
            mysqli_select_db($conn, 'vrms_info');

            $query4 = "SELECT `client_id` as ID, `last_name`, `given_name`, `middle_name`, `suffix`, `sex`, `birthday`, `age`, `contact`, `email`,
            `city`, `house_no`, `street`, `barangay_name` as brgy_name, brgy_id, `zip_code`, `address_type` FROM `client_info` INNER JOIN client_location ON client_id = location_id
            INNER JOIN barangay_list ON brgy_id = barangay_id WHERE email = '$email'";
            
            try {
                try{
                    $checkQuery4 = mysqli_query($conn, $query4);
                    $id = mysqli_fetch_assoc($checkQuery4)['ID'];

                    $query5 = "SELECT health_id, client_category.category_name as category_name, client_category.category_id, `philhealth_id` FROM `health_details`
                    INNER JOIN client_category ON health_details.category_id = client_category.category_id WHERE health_id = '$id'";
                    
                    $query6 = "SELECT first_dose.`first_dose_id`, `vaccine_date`, manufacturer.manufacturer_name as manufacturer_name, `lot_number`, `vaccinator`, `approved_by` FROM first_dose 
                    INNER JOIN health_details ON health_details.first_dose_id = first_dose.first_dose_id
                    INNER JOIN manufacturer ON first_dose.manufacturer = manufacturer.manufacturer_id WHERE first_dose.first_dose_id = '$id'";
                    
                    $query7 = "SELECT second_dose.second_dose_id, `vaccine_date`, manufacturer.manufacturer_name, `lot_number`, `vaccinator`, `approved_by` FROM second_dose 
                    INNER JOIN health_details ON health_details.second_dose_id = second_dose.second_dose_id
                    INNER JOIN manufacturer ON second_dose.manufacturer = manufacturer.manufacturer_id WHERE second_dose.second_dose_id = '$id'";
                    
                    $query8 = "SELECT first_booster.first_booster_id, `vaccine_date`, manufacturer.manufacturer_name, `lot_number`, `vaccinator`, `approved_by` FROM first_booster
                    INNER JOIN health_details ON health_details.first_booster_id = first_booster.first_booster_id
                    INNER JOIN manufacturer ON first_booster.manufacturer_id = manufacturer.manufacturer_id WHERE first_booster.first_booster_id = '$id'";
                    
                    $query9 = "SELECT second_booster.second_booster_id, `vaccine_date`, manufacturer.manufacturer_name, `lot_number`, `vaccinator`, `approved_by` FROM second_booster
                    INNER JOIN health_details ON health_details.second_booster_id = second_booster.second_booster_id
                    INNER JOIN manufacturer ON second_booster.manufacturer_id = manufacturer.manufacturer_id WHERE second_booster.second_booster_id = '$id'";

                    $checkQuery4 = mysqli_query($conn, $query4);

                    if(mysqli_num_rows($checkQuery4) > 0){
                        $row = mysqli_fetch_assoc($checkQuery4);

                        $client_id = $row['ID'];
                        $last_name = $row['last_name'];
                        $given_name = $row['given_name'];
                        $middle_name = $row['middle_name'];
                        $suffix = $row['suffix'];
                        $sex = $row['sex'];
                        $birthday = $row['birthday'];
                        $age = $row['age'];
                        $email = $row['email'];
                        $contact = $row['contact'];
                        $city = $row['city'];
                        $house_no = $row['house_no'];
                        $street = $row['street'];
                        $brgy_name = $row['brgy_name'];
                        $brgy_id = $row['brgy_id'];
                        $zip_code = $row['zip_code'];
                        $address_type = $row['address_type'];

                        // echo $client_id . "<br>";
                        // echo $last_name . "<br>";
                        // echo $given_name . "<br>";
                        // echo $middle_name . "<br>";
                        // echo $suffix . "<br>";
                        // echo $birthday . "<br>";
                        // echo $age . "<br>";
                        // echo $contact . "<br>";
                        // echo $city . "<br>";
                        // echo $house_no . "<br>";
                        // echo $street . "<br>";
                        // echo $brgy_name . "<br>";
                        // echo $zip_code . "<br>";
                        // echo $address_type . "<br><br>";
                    }
                    else{
                        $client_id = "";
                        $last_name = "";
                        $given_name = "";
                        $middle_name = "";
                        $suffix = "";
                        $sex="";
                        $birthday = "";
                        $age = "";
                        $email = "";
                        $contact = "";
                        $city = "";
                        $house_no = "";
                        $street = "";
                        $brgy_name = "";
                        $brgy_id = "";
                        $zip_code = "";
                        $address_type = "";
                    }

                    $newPerson = new Location(
                        $client_id,
                        $last_name,
                        $given_name,
                        $middle_name,
                        $suffix,
                        $sex,
                        $birthday,
                        $age,
                        $contact,
                        $email,
                        $city,
                        $house_no,
                        $street,
                        $brgy_name,
                        $brgy_id,
                        $zip_code,
                        $address_type
                    );

                    $_SESSION['newPerson'] = $newPerson;
                }catch(Exception $e){
                    echo $e;
                }

                try{
                    $checkQuery6 = mysqli_query($conn, $query6);

                    if(mysqli_num_rows($checkQuery6) > 0){
                        $row = mysqli_fetch_assoc($checkQuery6);

                        $first_dose_id = $row['first_dose_id'];
                        $f1_vaccine_date = $row['vaccine_date'];
                        $f1_manufacturer = $row['manufacturer_name'];
                        $f1_lot_number = $row['lot_number'];
                        $f1_vaccinator = $row['vaccinator'];
                        $f1_approved_by = $row['approved_by'];

                        // echo $first_dose_id . "<br>";
                        // echo $f1_vaccine_date . "<br>";
                        // echo $f1_manufacturer . "<br>";
                        // echo $f1_lot_number . "<br>";
                        // echo $f1_vaccinator . "<br>";
                        // echo $f1_approved_by . "<br><br>";
                    }
                    else{
                        $first_dose_id = "";
                        $f1_vaccine_date = "";
                        $f1_manufacturer = "";
                        $f1_lot_number = "";
                        $f1_vaccinator = "";
                        $f1_approved_by = "";
                    }

                    $first_dose = new Dosage(
                        $f1_vaccine_date,
                        $f1_manufacturer,
                        $f1_lot_number,
                        $f1_vaccinator,
                        $f1_approved_by
                    );
                }catch(Exception $e){
                    echo $e;
                }

                try{
                    $checkQuery7 = mysqli_query($conn, $query7);

                    if(mysqli_num_rows($checkQuery7) > 0){
                        $row = mysqli_fetch_assoc($checkQuery7);

                        $second_dose_id = $row['second_dose_id'];
                        $f2_vaccine_date = $row['vaccine_date'];
                        $f2_manufacturer = $row['manufacturer_name'];
                        $f2_lot_number = $row['lot_number'];
                        $f2_vaccinator = $row['vaccinator'];
                        $f2_approved_by = $row['approved_by'];

                        // echo $second_dose_id . "<br>";
                        // echo $f2_vaccine_date . "<br>";
                        // echo $f2_manufacturer . "<br>";
                        // echo $f2_lot_number . "<br>";
                        // echo $f2_vaccinator . "<br>";
                        // echo $f2_approved_by . "<br><br>";
                    }
                    else{
                        $second_dose_id = "";
                        $f2_vaccine_date = "";
                        $f2_manufacturer = "";
                        $f2_lot_number = "";
                        $f2_vaccinator = "";
                        $f2_approved_by = "";
                    }

                    $second_dose = new Dosage(
                        $f2_vaccine_date,
                        $f2_manufacturer,
                        $f2_lot_number,
                        $f2_vaccinator,
                        $f2_approved_by
                    );
                }catch(Exception $e){
                    echo $e;
                }

                try{
                    $checkQuery8 = mysqli_query($conn, $query8);

                    if(mysqli_num_rows($checkQuery8) > 0){
                        $row = mysqli_fetch_assoc($checkQuery8);

                        $first_booster_id = $row['first_booster_id'];
                        $b1_vaccine_date = $row['vaccine_date'];
                        $b1_manufacturer = $row['manufacturer_name'];
                        $b1_lot_number = $row['lot_number'];
                        $b1_vaccinator = $row['vaccinator'];
                        $b1_approved_by = $row['approved_by'];

                        // echo $first_booster_id . "<br>";
                        // echo $b1_vaccine_date . "<br>";
                        // echo $b1_manufacturer . "<br>";
                        // echo $b1_lot_number . "<br>";
                        // echo $b1_vaccinator . "<br>";
                        // echo $b1_approved_by . "<br><br>";
                    }
                    else{
                        $second_dose_id = "";
                        $b1_vaccine_date = "";
                        $b1_manufacturer = "";
                        $b1_lot_number = "";
                        $b1_vaccinator = "";
                        $b1_approved_by = "";
                    }

                    $first_booster = new Dosage(
                        $b1_vaccine_date,
                        $b1_manufacturer,
                        $b1_lot_number,
                        $b1_vaccinator,
                        $b1_approved_by
                    );
                }catch(Exception $e){
                    echo $e;
                }

                try{
                    $checkQuery9 = mysqli_query($conn, $query9);

                    if(mysqli_num_rows($checkQuery9) > 0){
                        $row = mysqli_fetch_assoc($checkQuery9);

                        $second_booster_id = $row['second_booster_id'];
                        $b2_vaccine_date = $row['vaccine_date'];
                        $b2_manufacturer = $row['manufacturer_name'];
                        $b2_lot_number = $row['lot_number'];
                        $b2_vaccinator = $row['vaccinator'];
                        $b2_approved_by = $row['approved_by'];

                        // echo $second_booster_id . "<br>";
                        // echo $b2_vaccine_date . "<br>";
                        // echo $b2_manufacturer . "<br>";
                        // echo $b2_lot_number . "<br>";
                        // echo $b2_vaccinator . "<br>";
                        // echo $b2_approved_by . "<br>";
                    }
                    else{
                        $second_dose_id = "";
                        $b2_vaccine_date = "";
                        $b2_manufacturer = "";
                        $b2_lot_number = "";
                        $b2_vaccinator = "";
                        $b2_approved_by = "";
                    }

                    $second_booster = new Dosage(
                        $b2_vaccine_date,
                        $b2_manufacturer,
                        $b2_lot_number,
                        $b2_vaccinator,
                        $b2_approved_by
                    );
                }catch(Exception $e){
                    echo $e;
                }

                try{
                    $checkQuery5 = mysqli_query($conn, $query5);

                    if(mysqli_num_rows($checkQuery5) > 0){
                        $row = mysqli_fetch_assoc($checkQuery5);

                        $health_id = $row['health_id'];
                        $category_id = $row['category_id'];
                        $category_name = $row['category_name'];
                        $philhealth_id = $row['philhealth_id'];

                        // echo $category_name . "<br>";
                        // echo $philhealth_id . "<br><br>";
                    }
                    else{
                        $health_id = "";
                        $category_id = "";
                        $category_name = "";
                        $philhealth_id = "";
                    }

                    $healthDetails = new HealthDetails(
                        $health_id, $category_id, $category_name, 
                        $philhealth_id, $first_dose, $second_dose, 
                        $first_booster, $second_booster
                    );

                    $_SESSION['health_details'] = $healthDetails;
                }catch(Exception $e){
                    echo $e;
                }

            } catch (Exception $e) {
                echo $e;
            }

            header('Location: ../PHP/Preloader.php');
            exit(0);
        }
        else{
            $_SESSION['message'] = "Invalid username or password! Try again!";
            header('Location: ../../index.php');
            exit(0);
        }
    } catch (Exception $e) {
        $_SESSION['message'] = "Something went wrong! Please contact the administrator!";
        header('Location: ../../index.php');
        exit(0);
    }
} else {
    header('Location: ../../index.php');
    exit(0);
}
