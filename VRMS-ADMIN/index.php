<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="./src/CSS/Login.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="bg-dark">
    <section class="h-100 gradient-form">
        <?php include('./src/PHP DATABASE/Message.php') ?>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="./files/imgs/logo.png" style="width: 75px" alt="logo" />
                                        <h4 class="mt-1 mb-4 pb-1">
                                            VAXpress: A Vaccine Record Management System
                                        </h4>
                                    </div>

                                    <form action="./src/PHP DATABASE/AdminLogin.php" method="POST">
                                        <p class="text-center">Please login to your account</p>

                                        <div class="form-outline mb-4">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="text" class="form-control" placeholder="Username" name="txtLUsername" required />
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" class="form-control" placeholder="Password" name="txtLPassword" required />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1 row p-5">
                                            <button class="btn btn-block gradient-custom-2 mb-3 text-white" type="submit" name="btnLogin">
                                                Log in
                                            </button>
                                            <button class="btn btn-transparent text-muted text-decoration-underline" type="button" data-bs-toggle="modal" data-bs-target="#viewForgotPassword">
                                                Forgot Password?
                                            </button>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <button type="submit" class="btn text-danger" id="createAccount">
                                                Create new
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2 rounded-3 ">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">

                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="./files/imgs/slider1.jpg" alt="" width="100%" />
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./files/imgs/slider2.jpg" alt="" width="100%" />
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./files/imgs/slider3.jpg" alt="" width="100%" />
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

    <!-- FORGOT PASSWORD -->
    <div class="modal fade" id="viewForgotPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Forgot Password
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="./src/PHP DATABASE/ForgotPassword.php" method="POST">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="txtFLName" placeholder="Last Name" required />
                            <label for="txtLName">Last Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="txtFGName" placeholder="Given Name" required />
                            <label for="txtGName">Given Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="txtFMName" placeholder="Middle Name" required />
                            <label for="txtMName">Middle Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="txtFEmail" placeholder="E-mail Address" required />
                            <label for="txtFEmail">Email Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="txtFPass" placeholder="Password" required />
                            <label for="txtFPass">Password</label>
                        </div>
                        <button type="submit" class="btn btn-outline-primary" name="btnFSubmit">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./src/JS/Login.js"></script>
</body>

</html>