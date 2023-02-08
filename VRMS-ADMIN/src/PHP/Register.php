<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"></script>
</head>

<body class="bg-dark">
    <section class="h-100 gradient-form">
        <?php include('../PHP DATABASE/Message.php') ?>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <form action="../PHP DATABASE/AdminRegister.php" method="POST">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-person-circle pb-1" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                            </svg>
                                            <h4 class="ms-1 mt-1 mb-4">
                                                REGISTER ADMIN ACCOUNT
                                            </h4>
                                        </div>
                                        <label>Full Name:</label>
                                        <div class="form-outline mb-2">
                                            <input type="text" class="form-control" placeholder="Last Name" name="lName" required />
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="text" class="form-control" placeholder="Given Name" name="fName" required />
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="text" class="form-control" placeholder="Middle Name" name="mName" />
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="text" class="form-control" placeholder="Suffix" name="suffix" />
                                        </div>

                                        <div class="form-outline mb-2">
                                            <label for="sex">Select Sex:</label>
                                            <select name="sex" id="sex" class="form-control">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-outline mb-2">
                                            <label for="sex">Birthday:</label>
                                            <input type="date" class="form-control" name="bday" placeholder="Birthdate" min="1980-01-01" max="2022-12-31" required />
                                        </div>

                                        <label>Personal Information:</label>

                                        <div class="form-outline mb-2">
                                            <input type="text" class="form-control" placeholder="Address" name="address" />
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="text" class="form-control" placeholder="Mobile Number" pattern="[0-9]{11}" name="contact" />
                                        </div>

                                        <div class="form-outline mb-2">
                                            <label for="department">Select Department:</label>
                                            <select name="department" id="department" class="form-control">
                                                <option value="IT" selected>IT</option>
                                                <option value="Government">Government</option>
                                                <option value="Health">Health</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="email" class="form-control" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2 rounded-3 ">
                                    <div class="text-white ps-4 pe-4 py-4">
                                        <label class="mb-2">Account Information:</label>
                                        <div class="form-outline mb-2">
                                            <input type="text" class="form-control" placeholder="Username" name="username" required />
                                        </div>
                                        <div class="form-outline mb-2">
                                            <input type="password" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" required />
                                        </div>
                                        <div class="form-outline mb-2">
                                            <input type="password" class="form-control" placeholder="Re-Enter Password" name="confirmPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
                                        </div>
                                        <div class="text-center pt-1 mb-1 pb-1 row p-5">
                                            <button class="btn btn-primary" type="submit" name="btnRegister">
                                                Register Account
                                            </button>
                                        </div>

                                        <h4 class="my-4 text-center">We are more than just a company</h4>
                                        <p class="small mb-0 text-center">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>