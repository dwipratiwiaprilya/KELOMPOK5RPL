<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rental_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

session_start();

// Redirect to login page if session email is not set
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $gambar = $_POST['gambar'];
    $description = $_POST['description'];
    $subcategory_id = $_POST['subcategory_id'];
    $rental_price = $_POST['rental_price'];
    $rating = $_POST['rating'];
    $details = $_POST['details'];
    $features = $_POST['features'];
    $package_includes = $_POST['package_includes'];

    $insertSql = "INSERT INTO tb_items (name, gambar, description, subcategory_id, rental_price, rating, details, features, package_includes) 
                  VALUES ('$name', '$gambar', '$description', '$subcategory_id', '$rental_price', '$rating', '$details', '$features', '$package_includes')";

    if (mysqli_query($conn, $insertSql)) {
        mysqli_close($conn); // Close database connection
        header("Location: adminkelolaitem.php"); // Redirect to item management page
        exit();
    } else {
        echo "<div class='alert alert-danger' role='alert'>Error adding item: " . mysqli_error($conn) . "</div>";
    }
}
?>
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
        .btn-secondary:hover {
        background-color: #007bff; /* Warna biru Bootstrap */
        color: #fff; /* Warna teks putih */
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Tambah Item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>
<body>
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
                    <a class="nav-link active" aria-current="page" href="indexadmin.php">Home</a>
                </li>
            <div class="btn-group">
                <h5> ADMIN </h5> 
            </div>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <h2 class="text-center mb-4">Tambah Item Baru</h2>
php
Copy code
<div class="row justify-content-center">
    <div class="col-md-6">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Item</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Nama Gambar</label>
                <input type="text" class="form-control" id="gambar" name="gambar" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="subcategory_id" class="form-label">ID Subkategori</label>
                <input type="text" class="form-control" id="subcategory_id" name="subcategory_id" required>
            </div>
            <div class="mb-3">
                <label for="rental_price" class="form-label">Harga Rental</label>
                <input type="text" class="form-control" id="rental_price" name="rental_price" required>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="text" class="form-control" id="rating" name="rating" required>
            </div>
            <div class="mb-3">
                <label for="details" class="form-label">Detail</label>
                <textarea class="form-control" id="details" name="details" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="features" class="form-label">Fitur</label>
                <textarea class="form-control" id="features" name="features" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="package_includes" class="form-label">Paket Cakupan</label>
                <textarea class="form-control" id="package_includes" name="package_includes" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
mysqli_close($conn);
?>