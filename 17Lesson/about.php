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
<body class="body">
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
          <a class="nav-link" href="gallery.php">Gallery</a>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php" style="background-color: blue;
    color: white; padding: 10px">About us</a>
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
    </div>
  </div>
</nav>



</center>

<div class="container">

<?php
      if (isset($_SESSION['username'])){
        echo "<h2>Welcome ".$_SESSION['username']." Good to see you again!!!</h2>";
        echo "<h3><a href='logout.php'></a></h3>";
        } else{
          echo "";
      }
?>
<br>

<!DOCTYPE html>
<html>
<head>
  <title>Tentang Kami - Sekolah</title>
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

    .about-section {
      margin-bottom: 40px;
    }

    .about-section h2 {
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .about-section p {
      color: #777;
      font-size: 16px;
      margin-bottom: 20px;
    }

    .mission-values {
      display: flex;
      justify-content: space-between;
      margin-bottom: 40px;
    }

    .mission-values .box {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: calc(33.33% - 20px);
    }

    .mission-values .box h3 {
      color: #333;
      font-size: 18px;
      margin-bottom: 10px;
    }

    .mission-values .box p {
      color: #777;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .advantages {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      grid-gap: 20px;
    }

    .advantages .box {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .advantages .box h3 {
      color: #333;
      font-size: 18px;
      margin-bottom: 10px;
    }

    .advantages .box p {
      color: #777;
      font-size: 14px;
      margin-bottom: 10px;
    }
  </style>

  <div class="header">
    <h1>Tentang Kami - Sekolah</h1>
  </div>
  <div class="container">
    <div class="about-section">
      <h2>Tentang Sekolah</h2>
      <p>Deskripsi tentang sekolah dan visi sekolah yang ingin dicapai.</p>
    </div>
    <div class="mission-values">
      <div class="box">
        <h3>Misi Sekolah</h3>
        <p>Deskripsi misi sekolah yang menjelaskan tujuan pendidikan dan nilai-nilai yang ingin ditanamkan.</p>
      </div>
      <div class="box">
        <h3>Nilai-nilai Sekolah</h3>
        <p>Deskripsi nilai-nilai sekolah seperti integritas, kerjasama, disiplin, dan lainnya.</p>
      </div>
    </div>
    <h2>Kelebihan Sekolah</h2>
    <div class="advantages">
      <div class="box">
        <h3>1. Fasilitas yang Modern</h3>
        <p>Deskripsi fasilitas sekolah yang modern seperti laboratorium ilmiah dan teknologi terkini.</p>
      </div>
      <div class="box">
        <h3>2. Guru Berkualitas</h3>
        <p>Deskripsi guru-guru yang berkualitas dengan pengalaman dan kompetensi yang tinggi.</p>
      </div>
      <div class="box">
        <h3>3. Kurikulum yang Komprehensif</h3>
        <p>Deskripsi kurikulum sekolah yang mencakup beragam bidang studi dan pengembangan keterampilan.</p>
      </div>
      <div class="box">
        <h3>4. Lingkungan Belajar yang Mendukung</h3>
        <p>Deskripsi lingkungan belajar yang nyaman dan mendukung perkembangan siswa secara holistik.</p>
      </div>
      <div class="box">
        <h3>5. Program Ekstrakurikuler yang Kaya</h3>
        <p>Deskripsi program ekstrakurikuler yang beragam dan memberikan kesempatan kepada siswa untuk mengeksplorasi minat dan bakat.</p>
      </div>
      <div class="box">
        <h3>6. Kemitraan dengan Komunitas</h3>
        <p>Deskripsi kemitraan sekolah dengan komunitas lokal dan pihak terkait untuk meningkatkan pengalaman belajar siswa.</p>
      </div>
    </div>
  </div>



</div>

</body>
</html>