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
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="gallery.php">Gallery</a>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admission.php"; style="background-color: blue;
    color: white; padding: 10px;">Admission</a>
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
    </div>
  </div>
</nav>


  <title>Admission School</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    .pricing {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }

    .plan {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin: 20px;
      padding: 20px;
      width: 300px;
    }

    .plan h3 {
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .plan p {
      color: #777;
      font-size: 16px;
      margin-bottom: 20px;
    }

    .plan .price {
      color: #333;
      font-size: 32px;
      margin-bottom: 20px;
    }

    .plan .features {
      color: #777;
      font-size: 14px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Admission School</h1>
  </div>
  <div class="container">
    <center><h2>Pricing</h2></center>
    <div class="pricing">
      <div class="plan">
        <h3>Basic</h3>
        <p>Get access to basic features</p>
        <div class="price">$99/month</div>
        <div class="features">
          <ul>
            <li>Online application</li>
            <li>Admission counseling</li>
            <li>Basic support</li>
          </ul>
        </div>
      </div>
      <div class="plan">
        <h3>Standard</h3>
        <p>Get access to standard features</p>
        <div class="price">$199/month</div>
        <div class="features">
          <ul>
            <li>Online application</li>
            <li>Admission counseling</li>
            <li>Priority support</li>
            <li>Interview preparation</li>
          </ul>
        </div>
      </div>
      <div class="plan">
        <h3>Premium</h3>
        <p>Get access to premium features</p>
        <div class="price">$299/month</div>
        <div class="features">
          <ul>
            <li>Online application</li>
            <li>Admission counseling</li>
            <li>Priority support</li>
            <li>Interview preparation</li>
            <li>College selection guidance</li>
            <li>Scholarship assistance</li>
          </ul>
        </div>
      </div>
    </div>
  </div>



<div>

<?php
      if (isset($_SESSION['username'])){
        echo "<h2>Welcome ".$_SESSION['username']." Good to see you again!!!</h2>";
        echo "<h3><a href='logout.php'></a></h3>";
        } else{
          echo "";
      }
?>

</div>

</body>
</html>