<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "rental_db";


$conn = mysqli_connect($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['emailskrg'];
    $currentPassword = $_POST['pwskrg'];
    $newPassword = $_POST['pwbaru'];
    $confirmPassword = $_POST['pwkonfirm'];


    $sql = "SELECT password FROM tb_user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password'];


        if ($currentPassword == $storedPassword) {

            if ($newPassword !== $confirmPassword) {
                echo "<script>alert('Password baru dan konfirmasi password tidak sama'); window.history.back();</script>";
                exit();
            }

            $updateSql = "UPDATE tb_user SET password = '$newPassword' WHERE email = '$email'";
            if (mysqli_query($conn, $updateSql)) {
                echo "<script>alert('Password berhasil diubah'); window.location.href='index.php';</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan saat mengubah password'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('Password saat ini salah'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Email tidak ditemukan'); window.history.back();</script>";
    }
}
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grent Bootstrap</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <style>
    .spaced-text {
      margin-left: 2rem; 
    }
    .highlighted {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 12px; 
      font-weight: bold;
      color: black;
      margin-left: 320px;
    }
    .date {
      color: gray;
    }
    .form-control {
      border: 2px solid black; 
    }
    .btn-secondary:hover {
      background-color: darkblue;
      color: white;
    }
    .btn-secondary {
      border-radius: 0; 
    }
    .form-group {
      margin-left: -15px;
      margin-right: -15px;
    }
    .container {
      padding-left: 0; 
      padding-right: 0; 
    }
    .btn-group {
      margin-left: 5px; 
    }
    .separator {
      width: 10px; 
    }
    .scrollable {
      height: 80vh; 
      overflow-y: auto;
    }
    body {
      background-color: #f8f9fa;
    }
    .dashboard {
      background-color: #343a40;
      color: white;
      padding: 20px;
    }
    .dashboard a {
      color: white;
      text-decoration: none;
      display: block; /* Setiap tautan sebagai blok */
      margin-bottom: 10px; /* Memberikan margin bawah untuk pemisah */
    }
    /* Tombol Mata */
    .eye-icon {
      cursor: pointer;
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
    }
  </style>
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
            <a class="nav-link" href="#">Otomotif</a></li>
        </ul>
        <div class="mx-auto"></div>
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
  <h1 class="text-center mt-5 mb-4" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight:bold;">Ubah Password</h1>
  <div class="container" style="max-width: 650px;">
    <form action="" method="post">
      <div class="row mb-3">
        <div class="col-md-12">
          <div class="input-group mb-3">
            <label for="emailskrg"></label>
            <input type="email" id="emailskrg" name="emailskrg" class="form-control" placeholder="Email">
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-12 position-relative">
          <div class="input-group mb-3">
            <label for="pwskrg"></label>
            <input type="password" id="pwskrg" name="pwskrg" class="form-control" placeholder="Password Sekarang">
            <span class="eye-icon" onclick="togglePasswordVisibility('pwskrg')">&#x1f441;</span>
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-12 position-relative">
          <div class="input-group mb-3">
            <label for="pwbaru"></label>
            <input type="password" id="pwbaru" name="pwbaru" class="form-control" placeholder="Password Baru">
            <span class="eye-icon" onclick="togglePasswordVisibility('pwbaru')">&#x1f441;</span>
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-12 position-relative">
          <div class="input-group mb-3">
          <label for="pwkonfirm"></label>
          <input type="password" id="pwkonfirm" name="pwkonfirm" class="form-control" placeholder="Konfirmasi Password">
          <span class="eye-icon" onclick="togglePasswordVisibility('pwkonfirm')">👁</span>
          </div>
          </div>
          </div>
          <div class="row mb-1">
          <div class="col-md-12">
          <button class="btn btn-secondary mt-3" type="submit" style="width:100%">Simpan Perubahan</button>
          </div>
          </div>
          </form>
          
            </div>
            <div class="container-fluid dashboard mt-5">
              <div class="row ">
                <div class="col-12">
                  <div class="dashboard">
                    <a href="#">> Tentang Kami</a>
                    <a href="#">> FAQs</a>
                    <a href="#">> Privacy Policy</a>
                    <a href="#">> Terms and Conditions</a>
                    <a href="#">> Hubungi Kami</a>
                  </div>
                </div>
              </div>
            </div> 
            <script>
              function togglePasswordVisibility(inputId) {
                var input = document.getElementById(inputId);
                if (input.type === "password") {
                  input.type = "text";
                } else {
                  input.type = "password";
                }
              }
            </script>
          </body>

          </html>

