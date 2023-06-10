<?php

session_start();

$host     = "localhost";
$user     = "root";
$password = "";

$db = mysqli_connect($host, $user, $password, 'log');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISKY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e72ba93ee1.js"> </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Impaction School</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"; style="background-color: blue;
    color: white; padding: 10px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        <li class="nav-item">
          <a class="nav-link" href="admission.php">Admission</a>
        <li class="nav-item">
          <a class="nav-link" href="login.php">LMS</a>
        </li>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li style="text-decoration:none" class="nav-item"><a class="nav-link"; href="register.php"><i class="bi bi-person-add"></i> Register</a></li>
      </ul>
      <ul></ul>
      <ul class="nav navbar-nav navbar-right">
        <li style="text-decoration:none" class="nav-item";><a class="nav-link"; href="login.php"><i class="fa-solid fa-right-to-bracket"></i>Login</a></li>
      </ul>
      <?php
        if (isset($_SESSION['username'])){
          echo '<ul class="nav navbar-nav navbar-right"><li class="nav-item"><a class="nav-link";<i class="fa-solid fa-user"></i><b>'.$_SESSION["username"].'</b></a></li><ul></ul><li class="nav-item"><b><a class="nav-link"; href="logout.php" style="background-color:red;"><i class="fa-solid fa-right-to-bracket" style="background-color:red;"></i> Logout</a></b></li></ul>';
        }else{
          echo"<ul class='nav navbar-nav navbar-right'><li class='nav-item'><a class='nav-link'; href='register.php'><i class='fa-solid fa-user-plus'></i> Register</a></li><ul></ul><li class='nav-item'><a class='nav-link'; href='login.php'><i class='fa-solid fa-right-to-bracket'></i> Login</a></li></ul>";
        }
      ?>
    </div>
  </div>
</nav>

<div id="carouselExampleLight" class="carousel carousel-light slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="Classroom.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="Lab1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Lapangan.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleLight" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleLight" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</center>

<div class="container">


<br>
   <h1>Welcome</h1>
   <h2>News</h2>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo maiores rem provident, 
    <br>cum corporis autem sunt consectetur sint optio consequatur, 
    dolorum aperiam repudiandae, sequi deleniti veniam soluta quia vitae tenetur.</p>
</div>

</body>
</html>