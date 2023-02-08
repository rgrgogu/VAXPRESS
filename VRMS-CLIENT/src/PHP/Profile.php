<?php
include('./Sidebar.php');

$query1 = "SELECT * FROM barangay_list";

try{
    mysqli_select_db($conn, 'vrms_info');
    $checkQuery1 = mysqli_query($conn, $query1);
}catch(Exception $e){
    echo $e;
}
?>

<section>
    <div class="col pt-4 pe-3" id="myProfile">
        <div class="row ">
            <nav aria-label="breadcrumb" class="bg-danger rounded-3 p-3 mb-4 text-white justify-content-between">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item" aria-current="page">User Profile</li>
                </ol>
            </nav>
        </div>
        <form class="row g-2 shadow rounded p-3 bg-dark text-white" id="info" action="../PHP DATABASE/UpdateClientInfo.php" method="POST">
            <div class="h4 pb-2 text-danger border-bottom border-danger d-flex justify-content-between align-items-center">
                <b>MY PERSONAL INFORMATION</b>
                <div class="row">
                    <div class="d-flex justify-content-end ">
                        <button type="button" name="edit_p_btn" id="edit_personal" class="btn btn-danger">Edit Personal Information</button>
                        <button type="submit" name="save_p_btn" id="save_personal" class="btn btn-danger">Save Personal Information</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="" value="<?php echo $newPerson->getLastName() ?>" />
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Given Name</label>
                <input type="text" name="given_name" class="form-control" id="" value="<?php echo $newPerson->getGivenName() ?>" />
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Middle Name</label>
                <input type="text" name="middle_name" class="form-control" id="" value="<?php echo $newPerson->getMiddleName() ?>" />
            </div>
            <div class="col-md-1">
                <label for="" class="form-label">Suffix</label>
                <input type="text" name="suffix" class="form-control" id="" value="<?php echo $newPerson->getSuffix() ?>" />
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Date of Birth</label>
                <input type="date" name="birthday" class="form-control" id="" value="<?php echo $newPerson->getBirthday() ?>" />
            </div>
            <div class="col-md-1">
                <label for="" class="form-label">Sex</label>
                <input type="text" name="sex" class="form-control" id="sex_input" value="<?php echo $newPerson->getSex() ?>" disabled/>
                <select name="sex" id="sex" class="form-control">
                    <option selected="true" disabled="disabled" value="<?php echo $sex?>">-- Select Sex --</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="col-md-1">
                <label for="" class="form-label">Age</label>
                <input type="text" class="form-control" id="age" value="<?php echo $newPerson->getAge() ?>" disabled/>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Email Address</label>
                <input type="text" class="form-control" id="email" value="<?php echo $newPerson->getEmail() ?>" disabled />
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Mobile Number</label>
                <input type="text" name="contact" class="form-control" id="" value="<?php echo $newPerson->getContact() ?>" />
            </div>
        </form>
        <br>
        <form class="row g-2 shadow rounded p-3 bg-dark text-white" id="loc" action="../PHP DATABASE/UpdateClientLocation.php" method="POST">
            <div class="h4 pb-2 text-danger border-bottom border-danger d-flex justify-content-between align-items-center">
                <b>MY LOCATION</b>
                <div class="row">
                    <div class="d-flex justify-content-end ">
                        <button type="button" name="edit_l_btn" id="edit_location" class="btn btn-danger">Edit Location</button>
                        <button type="submit" name="save_l_btn" id="save_location" class="btn btn-danger">Save Location</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">CITY</label>
                <input type="text" name="city" class="form-control" id="city" value="<?php echo $newPerson->getCity() ?>" disabled/>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">HOUSE #</label>
                <input type="text" name="house_no" class="form-control" id="" value="<?php echo $newPerson->getHouseNo() ?>"/>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">STREET</label>
                <input type="text" name="street" class="form-control" id="" value="<?php echo $newPerson->getStreet() ?>"/>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">BARANGAY</label>
                <input type="text" name="barangay" class="form-control" id="brgy_input" value="<?php echo $newPerson->getBrgyName()?>" disabled/>
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
            <div class="col-md-2">
                <label for="" class="form-label">ZIP CODE</label>
                <input type="text" name="zip_code" class="form-control" id="" value="<?php echo $newPerson->getZipCode() ?>"/>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">ADDRESS TYPE</label>
                <input type="text" name="address" class="form-control" id="address_input" value="<?php echo $newPerson->getAddressType() ?>"/>
                <select name="address" id="address" class="form-control">
                    <option selected="true" disabled="disabled" value="<?php echo $address_type?>">-- Select Address Type --</option>
                    <option value="Permanent">Permanent</option>
                    <option value="Present">Present</option>
                    <option value="Permanent and Present">Permanent and Present</option>
                </select>
            </div>
        </form>
        <section>
            <div class="col pt-4" id="myImmunization">
                <div class="pb-3">
                    <div class="row g-2 shadow rounded p-3 bg-warning">
                        <div class="d-flex flex-column flex-md-row flex-lg-row flex-xl-row align-items-center">
                            <div class="flex-grow-1">
                                <h1 class="lh-1 fw-bolder">MY VACCINATION CARD</h1>
                            </div>
                            <div class="text-md-end text-lg-end text-xl-end text-center w-50">
                                <p class="lh-1 fw-bold">
                                    This digital vaccine card includes your immunization car, medical
                                    information about the vaccine you have received.
                                </p>
                                <p class="lh-1 fw-bold">QUEZON CITY HEALTH DEPARTMENT</p>
                            </div>
                        </div>
                        <hr />
                        <form class="row g-2 shadow rounded p-3 ms-0 bg-white">
                            <div class="col-md-6">
                                <label for="" class="form-label">PhilHealth ID</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getPhilhealth()?>" disabled />
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Category</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getCategoryName()?>" disabled />
                            </div>
                        </form>
                        <form class="row g-2 shadow rounded p-3 ms-0 bg-danger text-white">
                            <div class="h4 pb-2 border-bottom border-white">
                                1st Dosage
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Vaccined Date</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getFirstDosage()->getVaccineDate()?>" disabled />
                            </div>
                            <div class="col-md-5">
                                <label for="" class="form-label">Vaccine Manufacturer</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getFirstDosage()->getVaccineManufacturer()?>" disabled />
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Lot Number</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getFirstDosage()->getLotNumber()?>" disabled />
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Vaccinator Name</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getFirstDosage()->getVaccinatorName()?>" disabled />
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Approved By</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getFirstDosage()->getApprovedBy()?>" disabled />
                            </div>
                        </form>
                        <form class="row g-2 shadow rounded p-3 ms-0 bg-secondary text-white">
                            <div class="h4 pb-2 border-bottom border-white">
                                2nd Dosage
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Vaccined Date</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getSecondDosage()->getVaccineDate()?>" disabled />
                            </div>
                            <div class="col-md-5">
                                <label for="" class="form-label">Vaccine Manufacturer</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getSecondDosage()->getVaccineManufacturer()?>" disabled />
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Lot Number</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getSecondDosage()->getLotNumber()?>" disabled />
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Vaccinator Name</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getSecondDosage()->getVaccinatorName()?>" disabled />
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Approved By</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getSecondDosage()->getApprovedBy()?>" disabled />
                            </div>
                        </form>
                        <form class="row g-2 shadow rounded p-3 ms-0 bg-success text-white">
                            <div class="h4 pb-2 border-bottom border-white">
                                1st Booster
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Vaccined Date</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getFirstBooster()->getVaccineDate()?>" disabled />
                            </div>
                            <div class="col-md-5">
                                <label for="" class="form-label">Vaccine Manufacturer</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getFirstBooster()->getVaccineManufacturer()?>" disabled />
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Lot Number</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getFirstBooster()->getLotNumber()?>" disabled />
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Vaccinator Name</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getFirstBooster()->getVaccinatorName()?>" disabled />
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Approved By</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getFirstBooster()->getApprovedBy()?>" disabled />
                            </div>
                        </form>
                        <form class="row g-2 shadow rounded p-3 ms-0 bg-primary text-white">
                            <div class="h4 pb-2 border-bottom border-white">
                                2nd Booster
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Vaccined Date</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getSecondBooster()->getVaccineDate()?>" disabled />
                            </div>
                            <div class="col-md-5">
                                <label for="" class="form-label">Vaccine Manufacturer</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getSecondBooster()->getVaccineManufacturer()?>" disabled />
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Lot Number</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getSecondBooster()->getLotNumber()?>" disabled />
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Vaccinator Name</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getSecondBooster()->getVaccinatorName()?>" disabled />
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Approved By</label>
                                <input type="text" class="form-control" id="" value="<?php echo $health_details->getSecondBooster()->getApprovedBy()?>" disabled />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<script>
    $("#info input").prop("disabled", true);
    $("#loc input").prop("disabled", true);
    
    $("#save_personal").hide();
    $("#save_location").hide();

    $('#barangay').hide();
    $('#address').hide();
    $('#sex').hide();

    $("#edit_personal").on("click", function(event){
        $("#info input").prop("disabled", false);
        $("#email").prop("disabled", true);
        $("#age").prop("disabled", true);
        $("#edit_personal").hide();
        $("#save_personal").show();
    });

    $("#edit_location").on("click", function(event){
        $("#loc input").prop("disabled", false);
        $("#city").prop("disabled", true);
        $("#edit_location").hide();
        $("#save_location").show();
    });

    $('#brgy_input').on('click', function(){
        $('#brgy_input').hide();
        $('#barangay').show();
    });

    $('#address_input').on('click', function(){
        $('#address_input').hide();
        $('#address').show();
    });

    $('#sex_input').on('click', function(){
        $('#sex_input').hide();
        $('#sex').show();
    });
</script>