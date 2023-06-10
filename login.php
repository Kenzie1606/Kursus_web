<?php

session_start();

$host     = "localhost";
$user     = "root";
$password = "";

$db = mysqli_connect($host, $user, $password, 'log');

if (isset($_POST['login'])){
  $username     = $_POST['username'];
  $userpassword = $_POST['password'];

  $sql = "SELECT * FROM admin WHERE username='$username' AND password = '$userpassword'";

  $query = mysqli_query($db, $sql);
  if (mysqli_num_rows($query)==1) {
    $_SESSION['username'] = $username;
    header("location:index.php");
    exit;
  } else {
    echo "<p style='text-align: center; font-weight:bold; 15px'>Login failed!!!</p>";
  }
}

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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Gallery.php">Gallery</a>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        <li class="nav-item">
          <a class="nav-link" href="admission.php">Admission</a>
        <li class="nav-item">
          <a class="nav-link" href="login.php">LMS</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li style="text-decoration:none" class="nav-item"><a class="nav-link"; href="register.php"><i class="bi bi-person-add"></i> Register</a></li>
      </ul>
      <ul></ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a style="text-decoration:none" class="nav-link-active"; href=" "><i class="fa-solid fa-right-to-bracket"></i>Login</a></li>
      </ul>
    </div>
  </div>
</nav>
 
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      height: 350px;
      padding: 20px;
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-bottom: center;
      position: relative;
      bottom: 0px;
      top: 70px;
    }

    .container h2 {
      text-align: center;
    }

    .container input[type="text"],
    .container input[type="password"]{ 
      width: 360px;
      height: 60px;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
      position: relative;
      top: 25px;
    }

    .container input[type="submit"] {
      width: 10%;
      padding: 10px;
      background-color: white;
      color: #ffff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      position: relative;
      left: 50px;
    }

    .container input[type="submit"]:hover {
      background-color: aqua;
      position: relative;
      left: 50px;
    }

    .btn{
      position: relative;
      top: 25px;
      width: 110px;
      height: 45px;
    }

    .pw{
      position: relative;
      top: 40px;
      left: 14px;
    }

  </style>


<form action="login.php" method="post"  >
<div class="container">
    <input type="text" id="floatingInput"
    placeholder="username" name="username" for="floatingPassword" required>
    <input type="password"  id="floatingPassword"
    placeholder="Password" name="password" for="floatingPassword"required>
    <br>
    <div class="pw"> 
      <a href="login.php">Forget Password?</a>
      <br>
    </div>
    <div class="btn">
      <button type="submit" name="login" class="btn btn-primary">SUBMIT</button>
    </div>
</div>
</form>

</body>
</html>
