<?php
include('./Sidebar.php');

$query1 = "SELECT * FROM barangay_list";
$query2 = "SELECT * FROM client_category";
$query3 = "SELECT * FROM manufacturer";

try {
    mysqli_select_db($conn, 'vrms_info');
    $checkQuery1 = mysqli_query($conn, $query1);
    $checkQuery2 = mysqli_query($conn, $query2);
    $checkQuery3 = mysqli_query($conn, $query3);
    $checkQuery4 = mysqli_query($conn, $query3);
    $checkQuery5 = mysqli_query($conn, $query3);
    $checkQuery6 = mysqli_query($conn, $query3);
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
                    <li class="breadcrumb-item" aria-current="page">Add New Person</li>
                </ol>
            </nav>
        </div>
        <div class="row ms-2 me-1 py-3">
            <section>
                <form action="../PHP DATABASE/ClientAddPerson.php" method="POST">
                    <div class="col " id="">
                        <div class="row g-3 pb-3 bg-danger bg-opacity-10 border border-danger ">
                            <div class="col-md-12">
                                <h4>PERSONAL INFORMATION</h4>
                                <hr class="mb-0">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="" />
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Given Name</label>
                                <input type="text" name="given_name" class="form-control" id="" />
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Middle Name</label>
                                <input type="text" name="middle_name" class="form-control" id="" />
                            </div>
                            <div class="col-md-1">
                                <label for="" class="form-label">Suffix</label>
                                <input type="text" name="suffix" class="form-control" id="" />
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Date of Birth</label>
                                <input type="date" name="birthday" class="form-control" id="" />
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Sex</label>
                                <select name="sex" id="sex" class="form-control">
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="" />
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Contact</label>
                                <input type="tel" name="contact" class="form-control" placeholder="09XXXXXXXXX" id=""  title="Must starts at 09 and all of them digits." />
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">PhilHealth Number</label>
                                <input type="text" name="philhealth" class="form-control" id="" />
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Category</label>
                                <select name="category" id="category" class="form-control">
                                    <?php
                                    if (mysqli_num_rows($checkQuery2) > 0) {
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
                                <input type="text" name="house_number" class="form-control" id="" />
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Street</label>
                                <input type="text" name="street" class="form-control" id="" />
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Barangay</label>
                                <select name="barangay" id="barangay" class="form-control">
                                    <?php
                                    if (mysqli_num_rows($checkQuery1) > 0) {
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
                                <input type="text" name="zip_code" class="form-control" id="" />
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Address Type</label>
                                <select name="address" id="address" class="form-control">
                                    <option value="Permanent" selected>Permanent</option>
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
                                    <input type="date" name="vax_date_1D" class="form-control" id="" />
                                </div>
                                <div class="col-md-5">
                                    <label for="" class="form-label">Vaccine Manufacturer</label>
                                    <select name="1stDose_manufacturer" id="1stDose_manufacturer" class="form-control">
                                        <?php
                                        if (mysqli_num_rows($checkQuery3) > 0) {
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
                                    <input type="text" name="vax_lot_1D" class="form-control" id="" />
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Vaccinator Name</label>
                                    <input type="text" name="vax_name_1D" class="form-control" id="" />
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Approved By</label>
                                    <input type="text" name="vax_approved_1D" class="form-control" id="" />
                                </div>
                            </div>
                            <br />
                            <div class="row g-2 shadow rounded p-3 border border-danger" id="div_2ndDosage">
                                <div class="h4 pb-2 text-danger border-bottom border-danger">
                                    <input class="form-check-input mb-2" type="checkbox" value="" name="second_dosage" id="second_dosage">
                                    <label class="form-check-label mt-1" for="flexCheckDefault">
                                        2nd Dosage
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Vaccined Date</label>
                                    <input type="date" name="vax_date_2D" class="form-control" id="" />
                                </div>
                                <div class="col-md-5">
                                    <label for="" class="form-label">Vaccine Manufacturer</label>
                                    <select name="2ndDose_manufacturer" id="2ndDose_manufacturer" class="form-control">
                                        <?php
                                        if (mysqli_num_rows($checkQuery4) > 0) {
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
                                    <input type="text" name="vax_lot_2D" class="form-control" id="" />
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Vaccinator Name</label>
                                    <input type="text" name="vax_name_2D" class="form-control" id="" />
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Approved By</label>
                                    <input type="text" name="vax_approved_2D" class="form-control" id="" />
                                </div>
                            </div>
                            <br />
                            <div class="row g-2 shadow rounded p-3 border border-danger" id="div_1stBooster">
                                <div class="h4 pb-2 text-danger border-bottom border-danger">
                                    <input class="form-check-input mb-2" type="checkbox" value="" name="first_booster" id="first_booster">
                                    <label class="form-check-label mt-1" for="flexCheckDefault">
                                        1st Booster
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Vaccined Date</label>
                                    <input type="date" name="vax_date_1B" class="form-control" id="" />
                                </div>
                                <div class="col-md-5">
                                    <label for="" class="form-label">Vaccine Manufacturer</label>
                                    <select name="1stBooster_manufacturer" id="1stBooster_manufacturer" class="form-control">
                                        <?php
                                        if (mysqli_num_rows($checkQuery5) > 0) {
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
                                    <input type="text" name="vax_lot_1B" class="form-control" id="" />
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Vaccinator Name</label>
                                    <input type="text" name="vax_name_1B" class="form-control" id="" />
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Approved By</label>
                                    <input type="text" name="vax_approved_1B" class="form-control" id="" />
                                </div>
                            </div>
                            <br />
                            <div class="row g-2 shadow rounded p-3 border border-danger" id="div_2ndBooster">
                                <div class="h4 pb-2 text-danger border-bottom border-danger">
                                    <input class="form-check-input mb-2" type="checkbox" value="" name="second_booster" id="second_booster">
                                    <label class="form-check-label mt-1" for="flexCheckDefault">
                                        2nd Booster
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Vaccined Date</label>
                                    <input type="date" name="vax_date_2B" class="form-control" id="" />
                                </div>
                                <div class="col-md-5">
                                    <label for="" class="form-label">Vaccine Manufacturer</label>
                                    <select name="2ndBooster_manufacturer" id="2ndBooster_manufacturer" class="form-control">
                                        <?php
                                        if (mysqli_num_rows($checkQuery6) > 0) {
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
                                    <input type="text" name="vax_lot_2B" class="form-control" id="" />
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Vaccinator Name</label>
                                    <input type="text" name="vax_name_2B" class="form-control" id="" />
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Approved By</label>
                                    <input type="text" name="vax_approved_2B" class="form-control" id="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <button class="btn btn-danger px-5" type="submit" name="add_person">Submit</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</section>

<script>
    $('#div_1stDosage input').prop('readonly', true);
    $('#first_dosage').prop('disabled', false);
    $('#div_2ndDosage input').prop('readonly', true);
    $('#second_dosage').prop('disabled', false);
    $('#div_1stBooster input').prop('readonly', true);
    $('#first_booster').prop('disabled', false);
    $('#div_2ndBooster input').prop('readonly', true);
    $('#second_booster').prop('disabled', false);

    $(`#first_dosage`).on('click', function() {
      if (this.checked) {
        $('#div_1stDosage input').prop('readonly', false);
      } else {
        $('#div_1stDosage input').prop('readonly', true);
        $('#first_dosage').prop('disabled', false);
      }
    });

    $(`#second_dosage`).on('click', function() {
      if (this.checked) {
        $('#div_2ndDosage input').prop('readonly', false);
      } else {
        $('#div_2ndDosage input').prop('readonly', true);
        $('#second_dosage').prop('disabled', false);
      }
    });

    $(`#first_booster`).on('click', function() {
      if (this.checked) {
        $('#div_1stBooster input').prop('readonly', false);
      } else {
        $('#div_1stBooster input').prop('readonly', true);
        $('#first_booster').prop('disabled', false);
      }
    });

    $(`#second_booster`).on('click', function() {
      if (this.checked) {
        $('#div_2ndBooster input').prop('readonly', false);
      } else {
        $('#div_2ndBooster input').prop('readonly', true);
        $('#second_booster').prop('disabled', false);
      }
    });
</script>