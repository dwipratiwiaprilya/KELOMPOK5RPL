<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body {
      background-image: url('assets/images/background.png'); /* Path ke gambar latar belakang */
      background-size: cover; /* Agar gambar menutupi seluruh latar belakang */
      background-repeat: no-repeat; /* Agar gambar tidak diulang */
      background-attachment: fixed; /* Agar latar belakang tetap di tempat saat di-scroll */
    }
    .center-image {
      text-align: center;
      margin-top: 20px; /* Menyesuaikan margin atas logo */
    }
    .btn-large {
      width: 100%;
      padding: 20px;
      font-size: 24px;
    }
    .button-container {
      margin-top: 50px; /* Menambahkan jarak dari atas */
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grent Bootstrap</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="elektronik.html">Elektronik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Otomotif</a>
          </li>
        </ul>
        <div class="mx-auto">
          <form class="d-flex" role="search">
            <div class="input-group">
              <span class="input-group-text">
            </div>
          </form>
        </div>
        <div class="btn-group">
          <a href="profil.php" class="nav-link">
         <h5> ADMIN </h5>
          </a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container text-center button-container" style="max-width: 1000px; margin-top: 150px;">
    <div class="col-md-12">
    <h2 class="text-center mb-5" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">Menu Admin</h2>
    </div>
    <div class="row mb-3">
      <div class="col-md-6 mb-3">
        <a href="adminkelolauser.php" class="btn btn-primary btn-large rounded">
          <i class="bi bi-person-lines-fill me-2"></i>Kelola Akun User
        </a>
      </div>
      <div class="col-md-6 mb-3">
        <a href="page2.php" class="btn btn-secondary btn-large rounded">
          <i class="bi bi-clock-history me-2"></i>Cek Riwayat Sewa
        </a>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-6 mb-3">
        <a href="adminkelolaitem.php" class="btn btn-success btn-large rounded">
          <i class="bi bi-box-seam me-2"></i>Kelola Item Barang
        </a>
      </div>
      <div class="col-md-6 mb-3">
        <a href="page4.php" class="btn btn-danger btn-large rounded">
          <i class="bi bi-credit-card me-2"></i>Validasi Pembayaran
        </a>
      </div>
    </div>
  </div>
</body>
</html>
