<?php
require('../PHP DATABASE/DBConnection.php');
require('../PHP DATABASE/Location.php');
require('../PHP DATABASE/HealthDetails.php');
require('../PHP DATABASE/Dosage.php');
session_start();

$newPerson = $_SESSION['newPerson'];
$health_details = $_SESSION['health_details'];
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../CSS/NavigationBar.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
          <a href="./VAXKnows.php" class="nav_link">
            <i class="bx bx-bar-chart-alt-2 nav_icon"></i>
            <span class="nav_name">VAXKnows</span>
          </a>
        </div>
      </div>
      <a href="../../index.php" class="nav_link">
        <i class="bx bx-log-out nav_icon"></i>
        <span class="nav_name">Sign Out</span>
      </a>
    </nav>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../JS/NavigationBar.js"></script>
</body>

</html>