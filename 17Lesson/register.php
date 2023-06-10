<?php
  $host = "localhost";
  $user = "root";
  $password = "";

  $db = mysqli_connect($host, $user, $password, 'log');

  if(isset($_POST['register'])){
    $email   = $_POST['email'];
    $username   = $_POST['username'];
    $userpassword   = $_POST['password'];

    $sql = "INSERT INTO admin(`email`, `username`, `password`)VALUES ('$email', '$username', '$userpassword')";

    $query = mysqli_query($db, $sql);
    if($query) {
      echo "<p style='text-align: center; font-weight:bold; margin-top:15px'>Data is inserted succesfully, please check your database!!!</p>";
    } else {
      echo "<p style='text-align: center; font-weight:bold; margin-top:15px'>Data insertion failed, please check you code!!!</p>";
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
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Impaction School</a>
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
          <a class="nav-link" href="login.php">LMS</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item"><a style="text-decoration:none" class="nav-link-active"; href=""><i class="bi bi-person-add"></i> Register</a></li>
      </ul>
      <ul></ul>
      <ul class="nav navbar-nav navbar-right">
        <li style="text-decoration:none" class="nav-item"><a class="nav-link"; href="login.php"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
      <div class="card" style="width: 450px;">
      <form action="register.php" method="post"> 
       
        <center><h1>Register</h1></center>
        <br>
         <div class="form-floating mb-3">
           <input type="email" class="form-control" id="floatingInput"
           placeholder="name@example.com" name="email"> 
           <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput"
          placeholder="username" name="username"> 
          <label for="floatingInput">Username</label>
        </div>
          <div class="form-floating mb-3" > 
          <input type="password" class="form-control" id="floatingPassword"
          placeholder="password" name="password" >
          <label for="floatingPassword">Password</label>
        </div>
<br>
        <center>
        <div clas="a"> 
         <a href="login.php">Alerady have an account? click here to login</a>
        <br>
        <br>
         <button type="submit" name="register" class="btn btn-primary"; style="width: 350px; height:50px">Register</button>
        </center>
        </div>
       
     </div>
     </form>

<style>

  .card{
    height: 500px;
    width: 400px;
    position: relative;
    right: -425px;
    top: 70px;
  }
    .container input[type="email"]
    .container input[type="text"]{ 
      width: 350px;
      height: 40px;
      position: relative;
      top: 140px;
    }

    .container input[type="password"]{
      position: relative;
      top: auto;
    }

    .a{
      position: relative;
      top: 75px;
    }

    .container{
      width: 300px;
      position: relative;
      left: -500px;
    }
</style>
</div>
</body>
</html>xa