<?php
// Include file konfigurasi atau file yang diperlukan
include 'config.php';

// Ambil data dari halaman sebelumnya jika tersedia
$start_date = $_POST['rental_start_date'] ?? date('Y-m-d');
$end_date = $_POST['rental_end_date'] ?? date('Y-m-d', strtotime('+1 day'));
$quantity = $_POST['jumlah'] ?? 1;

// Hitung total durasi dalam hari
$diff = strtotime($end_date) - strtotime($start_date);
$total_days = round($diff / (60 * 60 * 24));

// Hitung total biaya sewa
$rental_rate = 175000; // Tarif sewa per hari
$total_cost = $rental_rate * $total_days * $quantity;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grent Bootstrap</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <style>
    .footer {
      background-color: #f8f9fa;
      padding: 20px 0;
    }
    .footer ul {
      list-style: none;
      padding: 0;
    }
    .footer ul li {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
        <form class="d-flex mx-auto" role="search">
          <div class="input-group">
            <input class="form-control" type="search" placeholder="Search for products..." aria-label="Search">
            <button class="btn btn-outline-light" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
            </button>
          </div>
        </form>
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

  <!-- HERO -->
  <?php
      $sql ="SELECT * From tb_items where item_id=6";
      $hasil = mysqli_query($connect, $sql);
      while ($data = mysqli_fetch_assoc($hasil)) {
      ?>
  <div class="container mt-5">
  <h1 class="text-center">Pesanan Tersedia</h1>
    <div class="row mt-4">
      <div class="col-md-4 text-center">
        <img src="assets/images/<?php echo $data['gambar']; ?>" alt="Playstation 5" class="img-fluid">
      </div>
      <div class="col-md-8">
        <h2><?php echo $data['name']; ?></h2>
        <p><?php echo $data['price']; ?></p>
        <p><span class="text-warning">★ ★ ★ ★ </span> <?php echo $data['rating']; ?></p>
        <form action="proses_sewa.php" method="post">
          <div class="mb-3">
            <label for="startDate" class="form-label">Tanggal Mulai:</label>
            <input type="date" class="form-control" id="startDate" name="rental_start_date" value="<?php echo htmlspecialchars($start_date); ?>" readonly>
          </div>
          <div class="mb-3">
            <label for="endDate" class="form-label">Tanggal Selesai:</label>
            <input type="date" class="form-control" id="endDate" name="rental_end_date" value="<?php echo htmlspecialchars($end_date); ?>" readonly>
          </div>
          <div class="mb-3">
            <label for="totalDuration" class="form-label">Total Durasi:</label>
            <input type="text" class="form-control" id="totalDuration " id="totalDuration" value="<?php echo htmlspecialchars($total_days); ?> Hari" readonly>
          </div>
          <div class="mb-3">
            <label for="quantity" class="form-label">Jumlah Barang:</label>
            <input type="number" class="form-control" id="quantity" name="jumlah" min="1" value="<?php echo htmlspecialchars($quantity); ?>" readonly>
          </div>
          <div class="mb-3">
            <label for="totalCost" class="form-label">Total Biaya Sewa:</label>
            <input type="text" class="form-control" id="totalCost" value="Rp. <?php echo number_format($total_cost, 0, ',', '.'); ?>" readonly>
          </div>
          <div class="mb-3">
          <label for="paymentMethod" class="form-label">Metode Pembayaran:</label>
          <select class="form-select" id="paymentMethod" name="payment_method">
            <option selected disabled>Pilih Metode Pembayaran</option>
            <option value="BRI">Bank BRI</option>
            <option value="COD">COD</option>
          </select>
          </div>
          <button type="submit" class="btn btn-dark w-100">Sewa Sekarang</button>
      </form>
      </div>
      <?php } ?>
      </div>

  </div>
  <!-- FOOTER -->
  <footer class="footer mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>Tentang Kami</h5>
          <ul>
            <li><a href="#">Tentang kami</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Hubungi Kami</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
