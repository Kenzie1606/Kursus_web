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
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="gallery.php"; style="background-color: blue;
    color: white; padding: 10px;">Gallery</a>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="admission.php">Admission</a>
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


<style>
    .nav>nav-link active{
        transition-delay: 250ms;
    }
</style>

<!DOCTYPE html>
<html>
<head>
  <title>Galeri Sekolah</title>
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

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      grid-gap: 20px;
    }

    .box {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
    }

    .box img {
      max-width: 100%;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .box h3 {
      color: #333;
      font-size: 18px;
      margin-bottom: 10px;
    }

    .box p {
      color: #777;
      font-size: 14px;
      margin-bottom: 10px;
    }
  </style>

  <div class="header">
    <h1>Galeri Sekolah</h1>
  </div>
  <div class="container">
    <h2>Foto-foto Kegiatan Sekolah</h2>
    <div class="gallery">
      <div class="box">
        <img src="image1.jpg" alt="Foto Kegiatan 1">
        <h3>Kegiatan Olahraga</h3>
        <p>Deskripsi kegiatan olahraga yang dilakukan di sekolah.</p>
      </div>
      <div class="box">
        <img src="image2.jpg" alt="Foto Kegiatan 2">
        <h3>Pentas Seni</h3>
        <p>Deskripsi pentas seni yang diadakan di sekolah.</p>
      </div>
      <div class="box">
        <img src="image3.jpg" alt="Foto Kegiatan 3">
        <h3>Kunjungan Lapangan</h3>
        <p>Deskripsi kunjungan lapangan yang dilakukan oleh siswa.</p>
      </div>
      <div class="box">
        <img src="image4.jpg" alt="Foto Kegiatan 4">
        <h3>Pelatihan Kewirausahaan</h3>
        <p>Deskripsi pelatihan kewirausahaan di sekolah.</p>
      </div>
      <div class="box">
        <img src="image5.jpg" alt="Foto Kegiatan 5">
        <h3>Pembagian Sertifikat</h3>
        <p>Deskripsi acara pembagian sertifikat kepada siswa.</p>
      </div>
      <div class="box">
        <img src="image6.jpg" alt="Foto Kegiatan 6">
        <h3>Pembukaan Tahun Ajaran Baru</h3>
        <p>Deskripsi acara pembukaan tahun ajaran baru di sekolah.</p>
      </div>
    </div>
  </div>




<?php
      if (isset($_SESSION['username'])){
        echo "<h2>Welcome ".$_SESSION['username']." Good to see you again!!!</h2>";
        echo "<h3><a href='logout.php'></a></h3>";
        } else{
          echo "";
      }
?>



</body>
</html>