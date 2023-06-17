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
      echo "<p style='text-align: center; font-weight:bold; margin-top:45px'>Data is inserted succesfully, please check your database!!!</p>";
    } else {
      echo "<p style='text-align: center; font-weight:bold; margin-top:45px'>Data insertion failed, please check you code!!!</p>";
    }

  }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aleo&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/DA_About.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us-1.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us-2.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><button data-bs-toggle="collapse" data-bs-target="#navcol-2" class="navbar-toggler"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a class="navbar-brand text-start d-xxl-flex logo" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" href="index.html">IMPACTION SCHOOL</a>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html" style="width: 90px;">abOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="pricing.html">Admission</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                    <li class="nav-item" style="width: 90PX;"><a class="nav-link" href="blog-post-list.html" style="width: 80px;flex-direction: row;">blog</a></li>
                    <li class="nav-item" style="width: 70px;"><a class="nav-link" href="login.html" style="width: 70px;flex-direction: row;">ICC</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.html" style="width: 110px;flex-direction: row;">cONTACT US</a></li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item" style="width: 150px;"></li>
                    <li class="nav-item" style="width: 130px;"><a class="nav-link active" href="register.php" style="width: 110px;flex-direction: row;font-family: Montserrat, sans-serif;font-weight: bold;font-style: italic;font-size: 14px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 11C10.2091 11 12 9.20914 12 7C12 4.79086 10.2091 3 8 3C5.79086 3 4 4.79086 4 7C4 9.20914 5.79086 11 8 11ZM8 9C9.10457 9 10 8.10457 10 7C10 5.89543 9.10457 5 8 5C6.89543 5 6 5.89543 6 7C6 8.10457 6.89543 9 8 9Z" fill="currentColor"></path>
                                <path d="M11 14C11.5523 14 12 14.4477 12 15V21H14V15C14 13.3431 12.6569 12 11 12H5C3.34315 12 2 13.3431 2 15V21H4V15C4 14.4477 4.44772 14 5 14H11Z" fill="currentColor"></path>
                                <path d="M18 7H20V9H22V11H20V13H18V11H16V9H18V7Z" fill="currentColor"></path>
                            </svg>register</a></li>
                    <li class="nav-item" style="width: 120px;"><a class="nav-link" href="login.php" style="width: 110px;flex-direction: row;font-family: Montserrat, sans-serif;font-weight: bold;font-style: italic;font-size: 14px;"><i class="fas fa-sign-in-alt"></i>login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container">
      <div class="card " style="width: 450px;">
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

  .card {
    height: 500px;
    width: 400px;
    position: relative;
    right: -425px;
    top: 100px;
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

    .containerr {
      width: 300px;
      position: relative;
      left: -500px;
    }
</style>
</div>
</div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/WOWSlider-about-us.js"></script>
</body>

</html>