
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
    header("location:index1.php");
    exit;
  } else {
    echo "<p style='text-align: center; font-weight:bold; 15px'>Login failed!!!</p>";
  }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aleo&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><button data-bs-toggle="collapse" data-bs-target="#navcol-2" class="navbar-toggler"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a class="navbar-brand text-start d-xxl-flex logo" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" href="index.html">IMPACTION SCHOOL</a>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html" style="width: 90px;">AbOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="pricing.html">Admission</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                    <li class="nav-item" style="width: 90PX;"><a class="nav-link" href="blog-post-list.html" style="width: 80px;flex-direction: row;">blog</a></li>
                    <li class="nav-item" style="width: 70px;"><a class="nav-link active" href="login.php" style="width: 70px;flex-direction: row;">ICC</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.html" style="width: 110px;flex-direction: row;">CONTACT US</a></li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item" style="width: 150px;"></li>
                    <li class="nav-item" style="width: 130px;"><a class="nav-link" href="register.php" style="width: 110px;flex-direction: row;font-family: Montserrat, sans-serif;font-weight: bold;font-style: italic;font-size: 14px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 11C10.2091 11 12 9.20914 12 7C12 4.79086 10.2091 3 8 3C5.79086 3 4 4.79086 4 7C4 9.20914 5.79086 11 8 11ZM8 9C9.10457 9 10 8.10457 10 7C10 5.89543 9.10457 5 8 5C6.89543 5 6 5.89543 6 7C6 8.10457 6.89543 9 8 9Z" fill="currentColor"></path>
                                <path d="M11 14C11.5523 14 12 14.4477 12 15V21H14V15C14 13.3431 12.6569 12 11 12H5C3.34315 12 2 13.3431 2 15V21H4V15C4 14.4477 4.44772 14 5 14H11Z" fill="currentColor"></path>
                                <path d="M18 7H20V9H22V11H20V13H18V11H16V9H18V7Z" fill="currentColor"></path>
                            </svg>register</a></li>
                    <li class="nav-item" style="width: 120px;"><a class="nav-link active" href="login.php" style="width: 110px;flex-direction: row;font-family: Montserrat, sans-serif;font-weight: bold;font-style: italic;font-size: 14px;"><i class="fas fa-sign-in-alt"></i>login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page login-page">
        <section c>
            <div class="container">
                <div class="block-heading">
                    <center><h2 class="text-info">Log In</h2></center>
                    <p></p>
                </div>
                <style>
                    body {
                      font-family: Arial, sans-serif;
                      background-color: #f4f4f4;
                    }
                
                    .containerr {
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
                      top: 10px;
                    }
                
                    .containerr h2 {
                      text-align: center;
                    }
                
                    .containerr input[type="text"],
                    .containerr input[type="password"]{ 
                      width: 360px;
                      height: 60px;
                      padding: 10px;
                      margin-bottom: 15px;
                      border: 1px solid #ccc;
                      border-radius: 3px;
                      position: relative;
                      top: 25px;
                    }
                
                    .containerr input[type="submit"] {
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
                
                    .containerr input[type="submit"]:hover {
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
                <div class="containerr">
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


    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>