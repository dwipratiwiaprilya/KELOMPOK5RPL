<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rental_db";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

session_start();

// Periksa apakah sesi email ada
if(isset($_SESSION['email'])) {

    $email = $_SESSION['email'];

    // Ambil data pengguna dari database berdasarkan email
    $sql = "SELECT * FROM tb_user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nama = $row["nama"];
        $nomor_telepon = $row["telp"];
    
    } else {
        echo "Tidak ada data pengguna yang ditemukan.";
    }
} else {
    echo "Sesi email tidak ditemukan.";
}

// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set directory tujuan untuk menyimpan file yang diupload
    $upload_dir = 'assets/images/';

    // Handle file upload KTP
    if (isset($_FILES["ktp-file"]) && $_FILES["ktp-file"]["error"] == 0) {
        $ktp_file = $upload_dir . basename($_FILES["ktp-file"]["name"]);
        if (!move_uploaded_file($_FILES["ktp-file"]["tmp_name"], $ktp_file)) {
            die("Gagal mengupload foto KTP.");
        }

        // Simpan nama file ke database
        $sql = "UPDATE tb_user SET ktp='$ktp_file' WHERE email='$email'";
        if ($conn->query($sql) === TRUE) {
            echo "File KTP berhasil diunggah.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Handle file upload Kartu Keluarga
    if (isset($_FILES["kk-file"]) && $_FILES["kk-file"]["error"] == 0) {
        $kk_file = $upload_dir . basename($_FILES["kk-file"]["name"]);
        if (!move_uploaded_file($_FILES["kk-file"]["tmp_name"], $kk_file)) {
            die("Gagal mengupload foto Kartu Keluarga.");
        }

        // Simpan nama file ke database
        $sql = "UPDATE tb_user SET kk='$kk_file' WHERE email='$email'";
        if ($conn->query($sql) === TRUE) {
            echo "File Kartu Keluarga berhasil diunggah.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
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
.spaced-text {
    margin-left: 2rem; /* Adjust the margin to control spacing from the left */
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
    max-width : 100%;
    padding: 20px;
}
.dashboard a {
    color: white;
    text-decoration: none;
    display: block; /* Setiap tautan sebagai blok */
    margin-bottom: 10px; /* Memberikan margin bawah untuk pemisah */
}
/* Hide the input file element */
.input-file {
    display: none;
}
/* Style the custom upload button */
.upload-button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.profile-image {
        max-width: 100%; /* Atur lebar maksimum sesuai kebutuhan */
        height: auto; /* Biarkan tinggi gambar menyesuaikan dengan lebar */
        display: block; /* Agar gambar tidak menimbulkan spasi tambahan */
        margin-top: 10px; /* Atur margin atas sesuai kebutuhan */
    }

</style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="assets/images/logo biru hitam.png" alt="Logo" width="120" height="100" class="d-inline-block align-text-top" >
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
                <a class="nav-link" href="otomotif.php">Otomotif</a></li>
        </ul>
        <div class="mx-auto"></div>
    </div>
</div>
</nav>
<h2 class="text-center mt-5" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">Profil</h2>
<div class="d-flex justify-content-start spaced-text">
    <p class="highlighted mt-3" >TANGGAL PEMBUATAN AKUN: <span class="date">01-05-2024</span></p>
</div>
<div class="container" style="max-width: 650px;">
    <form method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="<?php echo"$nama" ?>" readonly>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5..64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                        </svg>
                    </span>
                    <input type="email" class="form-control" placeholder="<?php echo"$email" ?>" readonly>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                        </svg>
                    </span>
                    <input type="tel" class="form-control" placeholder="<?php echo"$nomor_telepon" ?>" readonly>
                </div>
            </div>
        </div>
        <div class="row mb-1">
    <div class="col-md-6">
        <div class="input-group">
            <!-- Hidden input file element for KTP -->
            <input type="file" name="ktp-file" id="ktp-file" class="input-file">
            <input type="text" class="form-control" id="ktp" placeholder="Ganti Foto KTP?" readonly>
            <label for="ktp-file" class="upload-button btn btn-secondary">Pilih File</label>
        </div>
        <img src="<?php echo $row['ktp']; ?>" alt="Foto KTP" class="profile-image">
    </div>
    <div class="col-md-6">
        <div class="input-group">
            <input type="file" name="kk-file" id="kk-file" class="input-file">
            <input type="text" class="form-control" id="family-photo" placeholder="Ganti Foto KK?" readonly >
            <label for="kk-file" class="upload-button btn btn-secondary">Pilih File</label>
        </div>
        <img src="<?php echo $row['kk']; ?>" alt="Foto KK" class="profile-image">
    </div>
</div>

        </div>
        <div class="row mb-1">
            <div class="col-md-12">
                <button class="btn btn-secondary mt-3" type="submit" style="width:650px; margin-left:290px; ">Simpan Perubahan</button>
            </div>
        </div>
    </form>
</div>
<div class="container-fluid dashboard mt-5">
    <div class="row ">
        <div class="col-12" style="width:2000px;">
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
</body>
</html>

