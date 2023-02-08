<?php
include('./Sidebar.php');

?>

<div class="height-100" id="load_home">
    <div class="col pt-4" id="home">
      <h3>Welcome Back, <?php echo $admin->getGivenName()?>!</h3>
      <p class="lead">Today is <?php echo date("l") . "! " . date("M. d, Y") ?></p>
      <hr />
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="../../files/imgs/banner1.jpg" alt="1st slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../../files/imgs/banner2.jpg" alt="2nd slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../../files/imgs/banner3.jpg" alt="3rd slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../../files/imgs/banner4.jpg" alt="4th slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../../files/imgs/banner4.png" alt="5th slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../../files/imgs/banner5.jpg" alt="6th slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../../files/imgs/banner6.jpg" alt="7th slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../../files/imgs/banner7.jpg" alt="8th slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../../files/imgs/banner8.jpg" alt="9th slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../../files/imgs/banner9.png" alt="10th slide" />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <hr />
      <iframe class="vh-100 w-100" src="https://app.powerbi.com/view?r=eyJrIjoiMzliZTBjZWQtNjcwYi00YmM3LWFjYjktZDNjYWRjNDdiMmJmIiwidCI6IjM3ZDFjZmJmLTM1NTMtNDc5ZS1iOGM0LTVhZDdkNjNkNDM4MyIsImMiOjEwfQ%3D%3D" frameborder="0"></iframe>
</div>