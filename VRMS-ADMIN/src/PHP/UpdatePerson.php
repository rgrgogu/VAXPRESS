<?php
include('./Sidebar.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query1 = "SELECT * FROM barangay_list";
    $query2 = "SELECT * FROM client_category";
    $query3 = "SELECT * FROM manufacturer";
    $query4 = "SELECT `client_id` as ID, `last_name`, `given_name`, `middle_name`, `suffix`, `sex`, `birthday`, `age`, `contact`, `email`,
    `city`, `house_no`, `street`, `barangay_name` as brgy_name, `zip_code`, `address_type` FROM `client_info` INNER JOIN client_location ON client_id = location_id
    INNER JOIN barangay_list ON brgy_id = barangay_id WHERE client_id = '$id'";
    
    $query5 = "SELECT client_category.category_name as category_name, `philhealth_id` FROM `health_details`
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

    try {
        mysqli_select_db($conn, 'vrms_info');
        $checkQuery1 = mysqli_query($conn, $query1);
        $checkQuery2 = mysqli_query($conn, $query2);
        $checkQuery3 = mysqli_query($conn, $query3);
        $checkQuery4 = mysqli_query($conn, $query3);
        $checkQuery5 = mysqli_query($conn, $query3);
        $checkQuery6 = mysqli_query($conn, $query3);
        
        try{
            $checkQuery7 = mysqli_query($conn, $query4);

            if(mysqli_num_rows($checkQuery7) > 0){
                $row = mysqli_fetch_assoc($checkQuery7);

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
                $birthday = "";
                $age = "";
                $contact = "";
                $city = "";
                $house_no = "";
                $street = "";
                $brgy_name = "";
                $zip_code = "";
                $address_type = "";
            }
        }catch(Exception $e){
            echo $e;
        }

        try{
            $checkQuery8 = mysqli_query($conn, $query5);

            if(mysqli_num_rows($checkQuery8) > 0){
                $row = mysqli_fetch_assoc($checkQuery8);

                $category_name = $row['category_name'];
                $philhealth_id = $row['philhealth_id'];

                // echo $category_name . "<br>";
                // echo $philhealth_id . "<br><br>";
            }
            else{
                $category_name = "";
                $philhealth_id = "";
            }
        }catch(Exception $e){
            echo $e;
        }

        try{
            $checkQuery9 = mysqli_query($conn, $query6);

            if(mysqli_num_rows($checkQuery9) > 0){
                $row = mysqli_fetch_assoc($checkQuery9);

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
        }catch(Exception $e){
            echo $e;
        }

        try{
            $checkQuery10 = mysqli_query($conn, $query7);

            if(mysqli_num_rows($checkQuery10) > 0){
                $row = mysqli_fetch_assoc($checkQuery10);

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
        }catch(Exception $e){
            echo $e;
        }

        try{
            $checkQuery11 = mysqli_query($conn, $query8);

            if(mysqli_num_rows($checkQuery11) > 0){
                $row = mysqli_fetch_assoc($checkQuery11);

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
        }catch(Exception $e){
            echo $e;
        }

        try{
            $checkQuery12 = mysqli_query($conn, $query9);

            if(mysqli_num_rows($checkQuery12) > 0){
                $row = mysqli_fetch_assoc($checkQuery12);

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
        }catch(Exception $e){
            echo $e;
        }
    } catch (Exception $e) {
        echo $e;
    }
?>

<section>
    <div class="col pt-4" id="add_person">
        <div class="row ms-2 me-1">
            <nav aria-label="breadcrumb" class="bg-danger rounded-3 p-3 mb-4 text-white justify-content-between">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">People Dashboard</li>
                    <li class="breadcrumb-item" aria-current="page">Update New Person</li>
                </ol>
            </nav>
        </div>
        <div class="row ms-2 me-1 py-3">
            <section>
                <form action="../PHP DATABASE/ClientUpdateProfile.php?<?php echo "id=$id" ?>" method="POST">
                    <div class="col " id="">
                        <div class="row g-3 pb-3 bg-danger bg-opacity-10 border border-danger ">
                            <div class="col-md-12">
                                <h4>PERSONAL INFORMATION</h4>
                                <hr class="mb-0">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="" value="<?php echo $last_name?>"/>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Given Name</label>
                                <input type="text" name="given_name" class="form-control" id="" value="<?php echo $given_name?>"/>
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Middle Name</label>
                                <input type="text" name="middle_name" class="form-control" id="" value="<?php echo $middle_name?>"/>
                            </div>
                            <div class="col-md-1">
                                <label for="" class="form-label">Suffix</label>
                                <input type="text" name="suffix" class="form-control" id="" value="<?php echo $suffix?>"/>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Date of Birth</label>
                                <input type="date" name="birthday" class="form-control" id="" value="<?php echo $birthday?>"/>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Sex</label>
                                <input type="text" class="form-control" name="sex" id="sex_input" value="<?php echo $sex?>" readonly/>
                                <select name="sex" id="sex" class="form-control">
                                    <option selected="true" disabled="disabled" value="<?php echo $sex?>">-- Select Sex --</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="" value="<?php echo $email?>"/>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Contact</label>
                                <input type="tel" name="contact" class="form-control" placeholder="09XXXXXXXXX" id=""  title="Must starts at 09 and all of them digits." value="<?php echo $contact?>"/>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">PhilHealth Number</label>
                                <input type="text" name="philhealth" class="form-control" id="" value="<?php echo $philhealth_id?>"/>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Category</label>
                                <input type="text" name="category" class="form-control" id="category_input" value="<?php echo $category_name?>" readonly/>
                                <select name="category" id="category" class="form-control">
                                    <?php
                                    if (mysqli_num_rows($checkQuery2) > 0) { ?>
                                        <option selected="true" disabled="disabled" value="<?php echo $category_name?>">-- Select Category --</option>
                                    <?php
                                        while ($rows = mysqli_fetch_assoc($checkQuery2)) { ?>
                                            <option value="<?php echo $rows['category_id'] ?>">
                                                <?php echo $rows['category_name'] ?>
                                            </option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row g-3 mt-3 pb-3 bg-danger bg-opacity-10 border border-danger ">
                            <div class="col-md-12">
                                <h4>LOCATION</h4>
                                <hr class="mb-0">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">City</label>
                                <input type="text" name="city" class="form-control" id="" value="Quezon City" readonly />
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">House Number</label>
                                <input type="text" name="house_number" class="form-control" id="" value="<?php echo $house_no?>"/>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Street</label>
                                <input type="text" name="street" class="form-control" id="" value="<?php echo $street?>"/>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Barangay</label>
                                <input type="text" name="barangay" class="form-control" id="brgy_input" value="<?php echo $brgy_name?>" readonly/>
                                <select name="barangay" id="barangay" class="form-control">
                                    <?php
                                    if (mysqli_num_rows($checkQuery1) > 0) {?>
                                        <option selected="true" disabled="disabled" value="<?php echo $brgy_name?>">-- Select Barangay --</option>
                                    <?php
                                        while ($rows = mysqli_fetch_assoc($checkQuery1)) { ?>
                                            <option value="<?php echo $rows['barangay_id'] ?>">
                                                <?php echo $rows['barangay_name'] ?>
                                            </option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">ZIP Code</label>
                                <input type="text" name="zip_code" class="form-control" id="" value="<?php echo $zip_code?>"/>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Address Type</label>
                                <input type="text" name="address" class="form-control" id="address_input" value="<?php echo $address_type?>" readonly/>
                                <select name="address" id="address" class="form-control">
                                    <option selected="true" disabled="disabled" value="<?php echo $address_type?>">-- Select Address Type --</option>
                                    <option value="Permanent">Permanent</option>
                                    <option value="Present">Present</option>
                                    <option value="Permanent and Present">Permanent and Present</option>
                                </select>
                            </div>
                        </div>
                        <br />
                        <div class="col">
                            <div class="row g-2 shadow rounded p-3 border border-danger" id="div_1stDosage">
                                <div class="h4 pb-2 text-danger border-bottom border-danger">
                                    <input class="form-check-input mb-2" type="checkbox" value="" name="first_dosage" id="first_dosage">
                                    <label class="form-check-label mt-1" for="flexCheckDefault">
                                        1st Dosage
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Vaccined Date</label>
                                    <input type="date" name="vax_date_1D" class="form-control" id="" value="<?php echo $f1_vaccine_date?>"/>
                                </div>
                                <div class="col-md-5">
                                    <label for="" class="form-label">Vaccine Manufacturer</label>
                                    <input type="text" name="1stDose_manufacturer" class="form-control" id="1stDose_input" value="<?php echo $f1_manufacturer?>" readonly/>
                                    <select name="1stDose_manufacturer" id="1stDose_manufacturer" class="form-control">
                                        <?php
                                        if (mysqli_num_rows($checkQuery3) > 0) {?>
                                            <option selected="true" disabled="disabled" value="<?php echo $f1_manufacturer?>">-- Select Vaccine Manufacturer --</option>
                                        <?php 
                                            while ($rows = mysqli_fetch_assoc($checkQuery3)) { ?>
                                                <option value="<?php echo $rows['manufacturer_id'] ?>">
                                                    <?php echo $rows['manufacturer_name'] ?>
                                                </option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Lot Number</label>
                                    <input type="text" name="vax_lot_1D" class="form-control" id="" value="<?php echo $f1_lot_number?>"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Vaccinator Name</label>
                                    <input type="text" name="vax_name_1D" class="form-control" id="" value="<?php echo $f1_vaccinator?>"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Approved By</label>
                                    <input type="text" name="vax_approved_1D" class="form-control" id="" value="<?php echo $f1_approved_by?>"/>
                                </div>
                            </div>
                            <br />
                            <!-- 2ND DOSAGE -->
                            <div class="row g-2 shadow rounded p-3 border border-danger" id="div_2ndDosage">
                                <div class="h4 pb-2 text-danger border-bottom border-danger">
                                    <input class="form-check-input mb-2" type="checkbox" value="" name="second_dosage" id="second_dosage">
                                    <label class="form-check-label mt-1" for="flexCheckDefault">
                                        2nd Dosage
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Vaccined Date</label>
                                    <input type="date" name="vax_date_2D" class="form-control" id="" value="<?php echo $f2_vaccine_date?>"/>
                                </div>
                                <div class="col-md-5">
                                    <label for="" class="form-label">Vaccine Manufacturer</label>
                                    <input type="text" name="2ndDose_manufacturer" class="form-control" id="2ndDose_input" value="<?php echo $f2_manufacturer?>" readonly/>
                                    <select name="2ndDose_manufacturer" id="2ndDose_manufacturer" class="form-control">
                                        <?php
                                        if (mysqli_num_rows($checkQuery4) > 0) {?>
                                            <option selected="true" disabled="disabled" value="<?php echo $f2_manufacturer?>">-- Select Vaccine Manufacturer --</option>
                                        <?php
                                            while ($rows = mysqli_fetch_assoc($checkQuery4)) { ?>
                                                <option value="<?php echo $rows['manufacturer_id'] ?>">
                                                    <?php echo $rows['manufacturer_name'] ?>
                                                </option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Lot Number</label>
                                    <input type="text" name="vax_lot_2D" class="form-control" id="" value="<?php echo $f2_lot_number?>"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Vaccinator Name</label>
                                    <input type="text" name="vax_name_2D" class="form-control" id="" value="<?php echo $f2_vaccinator?>"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Approved By</label>
                                    <input type="text" name="vax_approved_2D" class="form-control" id="" value="<?php echo $f2_approved_by?>"/>
                                </div>
                            </div>
                            <br />
                            <!-- 1ST BOOSTER -->
                            <div class="row g-2 shadow rounded p-3 border border-danger" id="div_1stBooster">
                                <div class="h4 pb-2 text-danger border-bottom border-danger">
                                    <input class="form-check-input mb-2" type="checkbox" value="" name="first_booster" id="first_booster">
                                    <label class="form-check-label mt-1" for="flexCheckDefault">
                                        1st Booster
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Vaccined Date</label>
                                    <input type="date" name="vax_date_1B" class="form-control" id="" value="<?php echo $b1_vaccine_date?>"/>
                                </div>
                                <div class="col-md-5">
                                    <label for="" class="form-label">Vaccine Manufacturer</label>
                                    <input type="text" name="1stBooster_manufacturer" class="form-control" id="1stBoost_input" value="<?php echo $b1_manufacturer?>" readonly/>
                                    <select name="1stBooster_manufacturer" id="1stBooster_manufacturer" class="form-control">
                                        <?php
                                        if (mysqli_num_rows($checkQuery5) > 0) {?>
                                            <option selected="true" disabled="disabled" value="<?php echo $b1_manufacturer?>">-- Select Vaccine Manufacturer --</option>
                                        <?php
                                            while ($rows = mysqli_fetch_assoc($checkQuery5)) { ?>
                                                <option value="<?php echo $rows['manufacturer_id'] ?>">
                                                    <?php echo $rows['manufacturer_name'] ?>
                                                </option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Lot Number</label>
                                    <input type="text" name="vax_lot_1B" class="form-control" id="" value="<?php echo $b1_lot_number?>"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Vaccinator Name</label>
                                    <input type="text" name="vax_name_1B" class="form-control" id="" value="<?php echo $b1_vaccinator?>"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Approved By</label>
                                    <input type="text" name="vax_approved_1B" class="form-control" id="" value="<?php echo $b1_approved_by?>"/>
                                </div>
                            </div>
                            <br />
                            <!-- 2ND BOOSTER -->
                            <div class="row g-2 shadow rounded p-3 border border-danger" id="div_2ndBooster">
                                <div class="h4 pb-2 text-danger border-bottom border-danger">
                                    <input class="form-check-input mb-2" type="checkbox" value="" name="second_booster" id="second_booster">
                                    <label class="form-check-label mt-1" for="flexCheckDefault">
                                        2nd Booster
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Vaccined Date</label>
                                    <input type="date" name="vax_date_2B" class="form-control" id="" value="<?php echo $b2_vaccine_date?>"/>
                                </div>
                                <div class="col-md-5">
                                    <label for="" class="form-label">Vaccine Manufacturer</label>
                                    <input type="text" name="2ndBooster_manufacturer" class="form-control" id="2ndBoost_input" value="<?php echo $b2_manufacturer?>" readonly/>
                                    <select name="2ndBooster_manufacturer" id="2ndBooster_manufacturer" class="form-control">
                                        <?php
                                        if (mysqli_num_rows($checkQuery6) > 0) {?>
                                            <option selected="true" disabled="disabled" value="<?php echo $b2_manufacturer?>">-- Select Vaccine Manufacturer --</option>
                                        <?php
                                            while ($rows = mysqli_fetch_assoc($checkQuery6)) { ?>
                                                <option value="<?php echo $rows['manufacturer_id'] ?>">
                                                    <?php echo $rows['manufacturer_name'] ?>
                                                </option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Lot Number</label>
                                    <input type="text" name="vax_lot_2B" class="form-control" id="" value="<?php echo $b2_lot_number?>"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Vaccinator Name</label>
                                    <input type="text" name="vax_name_2B" class="form-control" id="" value="<?php echo $b2_vaccinator?>"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Approved By</label>
                                    <input type="text" name="vax_approved_2B" class="form-control" id="" value="<?php echo $b2_approved_by?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <button class="btn btn-danger px-5" type="submit" name="edit_person">Submit</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</section>

<?php         
}
?>

<script>
    $('#div_1stDosage input').prop('readonly', true);
    $('#first_dosage').prop('disabled', false);
    $('#div_2ndDosage input').prop('readonly', true);
    $('#second_dosage').prop('disabled', false);
    $('#div_1stBooster input').prop('readonly', true);
    $('#first_booster').prop('disabled', false);
    $('#div_2ndBooster input').prop('readonly', true);
    $('#second_booster').prop('disabled', false);
    $('#sex_input').show();
    $('#sex').hide();
    $('#category_input').show();
    $('#category').hide();
    $('#brgy_input').show();
    $('#barangay').hide();
    $('#address_input').show();
    $('#address').hide();
    $('#1stDose_input').show();
    $('#1stDose_manufacturer').hide();
    $('#2ndDose_input').show();
    $('#2ndDose_manufacturer').hide();
    $('#1stBoost_input').show();
    $('#1stBooster_manufacturer').hide();
    $('#2ndBoost_input').show();
    $('#2ndBooster_manufacturer').hide();

    $('#sex_input').on('click', function(){
        $('#sex_input').hide();
        $('#sex').show();
    });

    $('#category_input').on('click', function(){
        $('#category_input').hide();
        $('#category').show();
    });

    $('#brgy_input').on('click', function(){
        $('#brgy_input').hide();
        $('#barangay').show();
    });

    $('#address_input').on('click', function(){
        $('#address_input').hide();
        $('#address').show();
    });

    $(`#first_dosage`).on('click', function() {
      if (this.checked) {
        $('#div_1stDosage input').prop('readonly', false);
        $('#1stDose_input').hide();
        $('#1stDose_manufacturer').show();
      } else {
        $('#div_1stDosage input').prop('readonly', true);
        $('#first_dosage').prop('disabled', false);
        $('#1stDose_input').show();
        $('#1stDose_manufacturer').hide();
      }
    });

    $(`#second_dosage`).on('click', function() {
      if (this.checked) {
        $('#div_2ndDosage input').prop('readonly', false);
        $('#2ndDose_input').hide();
        $('#2ndDose_manufacturer').show();
      } else {
        $('#div_2ndDosage input').prop('readonly', true);
        $('#second_dosage').prop('disabled', false);
        $('#2ndDose_input').show();
        $('#2ndDose_manufacturer').hide();
      }
    });

    $(`#first_booster`).on('click', function() {
      if (this.checked) {
        $('#div_1stBooster input').prop('readonly', false);
        $('#1stBoost_input').hide();
        $('#1stBooster_manufacturer').show();
      } else {
        $('#div_1stBooster input').prop('readonly', true);
        $('#first_booster').prop('disabled', false);
        $('#1stBoost_input').show();
        $('#1stBooster_manufacturer').hide();
      }
    });

    $(`#second_booster`).on('click', function() {
      if (this.checked) {
        $('#div_2ndBooster input').prop('readonly', false);
        $('#2ndBoost_input').hide();
        $('#2ndBooster_manufacturer').show();
      } else {
        $('#div_2ndBooster input').prop('readonly', true);
        $('#second_booster').prop('disabled', false);
        $('#2ndBoost_input').hide();
        $('#2ndBooster_manufacturer').show();
      }
    });
</script>