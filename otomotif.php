<?php
// elektroinik.php
include 'config.php';

// kode lainnya tetap sama
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grent Bootstrap</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }
    .card img {
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
      max-width: 100%;
      height: auto;
    }
    .card-body {
      display: flex;
      align-items: center;
    }
    .card-content {
      padding: 15px;
    }
    .rent-price {
      font-size: 1.2rem;
      font-weight: bold;
      color: #333;
    }
    .rating {
      margin: 10px 0;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      color: #fff;
      border-radius: 50px;
      padding: 10px 20px;
    }
    .rating {
      display: flex;
      align-items: center;
    }
    .rating .fa-star,
    .rating .fa-star-half-alt {
      color: #ffc107;
    }
    .rating span {
      margin-left: 5px;
      font-size: 1rem;
      color: #333;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/Applications/XAMPP/xamppfiles/htdocs/KELOMPOK5RPL/KELOMPOK5RPL/assets/images/logo biru hitam.png" alt="Logo" width="120" height="100" class="d-inline-block align-text-top">
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
            <a class="nav-link" href="#">Elektronik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Otomotif</a>
          </li>
        </ul>
        <div class="mx-auto">
          <form class="d-flex" role="search">
            <div class="input-group">
              <span class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
              </span>
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
          </form>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profil</a></li>
            <li><a class="dropdown-item" href="#">Ganti Password</a></li>
            <li><a class="dropdown-item" href="#">Riwayat Sewa</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Keluar</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!--KATEGORI MOBIL-->
  <h2 style="text-align: center; margin-top: 20px; margin-bottom: 10px;">Mobil</h2>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="card">
        <?php
      $sql ="SELECT * From tb_items where item_id=8";
      $hasil = mysqli_query($connect, $sql);
      while ($data = mysqli_fetch_assoc($hasil)) {
      ?>
          <img src="assets/images/<?php echo $data['gambar']; ?>" class="card-img-top" alt="<?php echo $data['gambar']; ?>">
          <div class="card-body">
            <div class="card-content">
              <h5 class="card-title"><?php echo $data['name']; ?></h5>
              <p class="rent-price">Rp  <?php echo number_format($data['rental_price'], 2, ',', '.'); ?></p>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span><?php echo $data['rating']; ?>/5</span>
              </div>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card">
        <?php
      $sql ="SELECT * From tb_items where item_id=9";
      $hasil = mysqli_query($connect, $sql);
      while ($data = mysqli_fetch_assoc($hasil)) {
      ?>
          <img src="assets/images/<?php echo $data['gambar']; ?>" class="card-img-top" alt="<?php echo $data['gambar']; ?>">
          <div class="card-body">
            <div class="card-content">
              <h5 class="card-title"><?php echo $data['name']; ?></h5>
              <p class="rent-price">Rp  <?php echo number_format($data['rental_price'], 2, ',', '.'); ?></p>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span><?php echo $data['rating']; ?>/5</span>
              </div>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
  
  <!--KATEGORI MOTOR-->
  <h2 style="text-align: center; margin-top: 20px; margin-bottom: 10px;">Motor</h2>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="card">
        <?php
      $sql ="SELECT * From tb_items where item_id=10";
      $hasil = mysqli_query($connect, $sql);
      while ($data = mysqli_fetch_assoc($hasil)) {
      ?>
          <img src="assets/images/<?php echo $data['gambar']; ?>" class="card-img-top" alt="<?php echo $data['gambar']; ?>">
          <div class="card-body">
            <div class="card-content">
              <h5 class="card-title"><?php echo $data['name']; ?></h5>
              <p class="rent-price">Rp  <?php echo number_format($data['rental_price'], 2, ',', '.'); ?></p>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span><?php echo $data['rating']; ?>/5</span>
              </div>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card">
        <?php
      $sql ="SELECT * From tb_items where item_id=11";
      $hasil = mysqli_query($connect, $sql);
      while ($data = mysqli_fetch_assoc($hasil)) {
      ?>
          <img src="assets/images/<?php echo $data['gambar']; ?>" class="card-img-top" alt="<?php echo $data['gambar']; ?>">
          <div class="card-body">
            <div class="card-content">
              <h5 class="card-title"><?php echo $data['name']; ?></h5>
              <p class="rent-price">Rp  <?php echo number_format($data['rental_price'], 2, ',', '.'); ?></p>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span><?php echo $data['rating']; ?>/5</span>
              </div>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
  
  <!--KATEGORI SEPEDA-->
  <h2 style="text-align: center; margin-top: 20px; margin-bottom: 10px;">Sepeda</h2>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="card">
        <?php
      $sql ="SELECT * From tb_items where item_id=12";
      $hasil = mysqli_query($connect, $sql);
      while ($data = mysqli_fetch_assoc($hasil)) {
      ?>
          <img src="assets/images/<?php echo $data['gambar']; ?>" class="card-img-top" alt="<?php echo $data['gambar']; ?>">
          <div class="card-body">
            <div class="card-content">
              <h5 class="card-title"><?php echo $data['name']; ?></h5>
              <p class="rent-price">Rp  <?php echo number_format($data['rental_price'], 2, ',', '.'); ?></p>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span><?php echo $data['rating']; ?>/5</span>
              </div>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>

  <!--KATEGORI PICKUP-->
  <h2 style="text-align: center; margin-top: 20px; margin-bottom: 10px;">Pickup</h2>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="card">
        <?php
      $sql ="SELECT * From tb_items where item_id=13";
      $hasil = mysqli_query($connect, $sql);
      while ($data = mysqli_fetch_assoc($hasil)) {
      ?>
          <img src="assets/images/<?php echo $data['gambar']; ?>" class="card-img-top" alt="<?php echo $data['gambar']; ?>">
          <div class="card-body">
            <div class="card-content">
              <h5 class="card-title"><?php echo $data['name']; ?></h5>
              <p class="rent-price">Rp  <?php echo number_format($data['rental_price'], 2, ',', '.'); ?></p>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span><?php echo $data['rating']; ?>/5</span>
              </div>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
