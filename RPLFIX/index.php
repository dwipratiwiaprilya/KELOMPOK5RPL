<?php
session_start();

if(isset($_SESSION['email'])) {
    // Cek apakah session email sudah ada
    $email = $_SESSION['email'];
    $nama = $_SESSION['nama'];

} else {
    header("Location: login.php");
    exit(); 
}
?>


<html lang="en">
<head>
  <style>
    .center-image {
      text-align: center;
      margin-top: 20px; /* Menyesuaikan margin atas logo */
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grent Boostrap</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="assets/images/logo biru hitam.png" alt="Logo" width="120" height="100" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="elektronik.php">Elektronik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="otomotif.php">Otomotif</a>
          </li>
        </ul>
        <div class="mx-auto">

          </div>
          </div>
          <a href="logout.php" class="btn btn-outline-danger ms-3">Log Out</a> <!-- Tombol Log Out -->
        </div>
          <div class="btn-group">
  <button type="button" class="btn btn-danger" data-bs-toggle="dropdown" aria-expanded="false" onclick="location.href='profil.php'">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
    </svg>
  </button>
</div>




          </div>
      </div>
    </div>
  </nav>

  <!--HERO-->
  <section id="hero"  class="min-vh-100 d-flex align-items-center text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-uppercase text-black fw-semibold display-1">Selamat Datang <?php echo"$nama" ?></h1>
                <h5 class="text-black mt-3 mb-4" data-aos="fade-right">Kami Menyediakan Penyewaan Barang Elektronik dan Otomotif</h5>
                <div data-aos="fade-up" data-aos-delay="50"></div>
                <div>
                    <a href="elektronik.php" class="btn btn-brand me-2">Elektronik</a>
                    <a href="otomotif.php   " class="btn btn-brand ms-2">Otomotif</a>
                </div>
            </div>
        </div>
    </div>
  </section>
</body>
</html>