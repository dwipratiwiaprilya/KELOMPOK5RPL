<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rental_db";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk memeriksa login user
    $query = "SELECT * FROM tb_user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Jika login berhasil, ekstrak nama pengguna dari database
        $row = mysqli_fetch_assoc($result);
        $nama = $row['nama'];

        // Mulai session
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['nama'] = $nama;

        // Redirect ke halaman index.php
        header("Location: index.php");
        exit();
    } else {
        // Query untuk memeriksa login admin
        $queryadmin = "SELECT * FROM tb_admin WHERE username = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $queryadmin);

        if (mysqli_num_rows($result) == 1) {
            // Jika login admin berhasil
            session_start();
            $_SESSION['username'] = $email;

            // Redirect ke halaman indexadmin.php
            header("Location: indexadmin.php");
            exit();
        } else {
            echo "Email atau password salah!";
        }
    }
}
$conn->close();
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
    .spaced-text { margin-left: 2rem; }
    .highlighted {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 12px;
      font-weight: bold;
      color: black;
      margin-left: 320px;
    }
    .date { color: gray; }
    .form-control { border: 2px solid black; }
    .btn-secondary:hover {
      background-color: darkblue;
      color: white;
    }
    .btn-secondary { border-radius: 0; }
    .form-group {
      margin-left: -15px;
      margin-right: -15px;
    }
    .container { padding-left: 0; padding-right: 0; }
    .btn-group { margin-left: 5px; }
    .separator { width: 10px; }
    .scrollable {
      height: 80vh;
      overflow-y: auto;
    }
    body { background-color: #f8f9fa; }
    .dashboard {
      background-color: #343a40;
      color: white;
      padding: 20px;
    }
    .dashboard a {
      color: white;
      text-decoration: none;
      display: block;
      margin-bottom: 10px;
    }
    .eye-icon {
      cursor: pointer;
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
    }
    .center-image {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          <div class="mx-auto"></div>
        </div>
      </div>
    </nav>
    <div class="center-image">
      <img src="assets/images/logo biru hitam.png" alt="logo app" style="max-width: 300px; margin-top:-20px; margin-bottom:-100px;">
    </div>
    <div class="container" style="max-width: 600px;">
      <form action="" method="post">
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="input-group mb-3">
              <label for="emailskrg"></label>
              <input type="text" id="email" name="email" class="form-control" placeholder="Email/Nama Pengguna">
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12 position-relative">
            <div class="input-group mb-3">
              <label for="pwskrg"></label>
              <input type="password" id="password" name="password" class="form-control" placeholder="Password">
              <span class="eye-icon" onclick="togglePasswordVisibility('password')">&#x1f441;</span>
            </div>
          </div>
        </div>
        <div class="row mb-1">
          <div class="col-md-12">
            <button class="btn btn-secondary mt-3" type="submit" style="width:100%;">Login</button>
          </div>
          <div class="col-md-12" style="text-align:center;">
            <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 12px;">
                Belum punya akun?
                <a href="register.html" style="text-decoration: underline; margin-top: 5px;">Disini</a>
            </p>
        </div>
        
        </div>
      </form>
    </div>
</body>
</html>

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
