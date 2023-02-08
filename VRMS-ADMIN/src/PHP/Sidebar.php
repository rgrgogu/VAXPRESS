<?php
require('../PHP CLASSES/AdminAcc.php');
require('../PHP DATABASE/DBConnection.php');
session_start();

$admin = $_SESSION['object'];
?>

<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../CSS/NavigationBar.css" />
  <link rel="stylesheet" href="../CSS/Profile.css">
</head>

<body id="body-pd">
  <header class="header" id="header">
    <div class="header_toggle">
      <i class="bx bx-menu" id="header-toggle"></i>
    </div>
    <div class="header_img">
      <img src="../../files/imgs/logo.png" alt="" />
    </div>
  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div>
        <a href="#" class="nav_logo">
          <i class="bx bx-layer nav_logo-icon"></i>
          <span class="nav_logo-name">DASHBOARD</span>
        </a>
        <div class="nav_list">
          <a href="./Home.php" class="nav_link">
            <i class="bx bx-grid-alt nav_icon"></i>
            <span class="nav_name">Menu</span>
          </a>
          <a href="./Profile.php" class="nav_link">
            <i class="bx bx-user nav_icon"></i>
            <span class="nav_name">My Profile</span>
          </a>
          <a href="./ClientCRUD.php" class="nav_link">
            <i class="bx bx-folder nav_icon"></i>
            <span class="nav_name">My VaxDetails</span>
          </a>
        </div>
      </div>
      <a href="../../index.php" class="nav_link">
        <i class="bx bx-log-out nav_icon"></i>
        <span class="nav_name">Sign Out</span>
      </a>
    </nav>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="../JS/NavigationBar.js"></script>
  <script>


    // $(".nav .nav-link").on("click", function(){
    //   $(".nav").find(".active").removeClass("active");
    //   $(this).addClass("active");
    // });

    // const url = window.location.href;
    // const linkColor = document.querySelectorAll(".nav_link");

    // if (url == "http://localhost/SIA/VRMS-ADMIN/src/PHP/Dashboard.php#myProfile") {
    //   linkColor.forEach((l, i) => {
    //     l.classList.remove("active");
    //     if (i == 1) {
    //       l.classList.add("active");
    //     }
    //   });

    //   $(`#myProfile`).show();
    //   $(`#home`).hide();
    //   $(`#client_crud`).hide();
    // }
    // else if (url == "http://localhost/SIA/VRMS-ADMIN/src/PHP/Dashboard.php#client_crud"){
    //   linkColor.forEach((l, i) => {
    //     l.classList.remove("active");
    //     if (i == 1) {
    //       l.classList.add("active");
    //     }
    //   });

    //   $(`#myProfile`).hide();
    //   $(`#home`).hide();
    //   $(`#client_crud`).show();
    // } else {
    //   $(`#myProfile`).hide();
    //   $(`#home`).show();
    //   $(`#client_crud`).hide();
    //   $("#add_person").hide();
    // }

    // function btnAdd() {
    //   $("#add_person").show();
    //   $(`#client_crud`).hide();
    // }

    // $("#save_btn").hide();
    // $("#save_socmed_btn").hide();

    // $("#edit_profile input").prop("disabled", true);
    // $("#edit_socmed input").prop("disabled", true);

    // $("#sex_select").prop("hidden", true);
    // $("#department_select").prop("hidden", true);

    // function home() {
    //   $(`#home`).show();
    //   $(`#myProfile`).hide();
    //   $(`#client_crud`).hide();
    //   $("#add_person").hide();
    // }

    // function btnMy() {
    //   $(`#home`).hide();
    //   $(`#myProfile`).hide();
    //   $(`#client_crud`).show();
    //   $("#add_person").hide();
    // }

    // function btnProfile() {
    //   $(`#myProfile`).show();
    //   $(`#home`).hide();
    //   $(`#client_crud`).hide();
    //   $("#add_person").hide();
    // }
  </script>
</body>

</html>