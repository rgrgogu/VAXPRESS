<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"></script>
</head>

<body style="background-color: #e8e4c9;">
    <section class="h-100 gradient-form">
        <?php include('../PHP DATABASE/Message.php') ?>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex align-items-center">
                                <form action="../PHP DATABASE/ClientPass.php" method="POST">
                                    <div class="card-body p-md-4 mx-md-4" style="margin: auto">
                                        <div class="d-flex justify-content-center mt-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-person-circle pb-1" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                            </svg>
                                            <h4 class="ms-1 mb-4">
                                                UPDATE CLIENT PASSWORD
                                            </h4>
                                        </div>
                                        <div class="form-outline mb-2">
                                            <label for="NPass">Enter New Password:</label>
                                            <input type="password" class="form-control" placeholder="New Password" name="NPass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
                                        </div>
                                        <div class="form-outline mb-2">
                                            <label for="RPass">Re-enter New Password:</label>
                                            <input type="password" class="form-control" placeholder="Re-enter Password" name="RPass" required />
                                        </div>
                                        <div class="text-center pt-1 mb-1 pb-1 row p-5">
                                            <button class="btn btn-block gradient-custom-2 mt-3 text-white" type="submit" name="btnUpdate">
                                                Update Account
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2 rounded-end">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="../../files/imgs/slider1.jpg" alt="" width="100%" />
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../../files/imgs/slider2.jpg" alt="" width="100%" />
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../../files/imgs/slider3.jpg" alt="" width="100%" />
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="my-4 text-center">"Stay protected, stay organized with VAXpress"</h4>
                                    <p class="text-justify small mb-0" style="text-align: justify">
                                    VAXpress is a system used to track and manage vaccination records for individuals. 
                                    The purpose of such system is to provide a centralized and secure location for storing vaccination records, making it easy for individuals and healthcare providers to access and update this information as needed.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>