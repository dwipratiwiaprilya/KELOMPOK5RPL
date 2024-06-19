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

// Pagination configuration
$records_per_page = 5;
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $records_per_page;

// Delete user if 'delete' parameter is set in URL
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $deleteSql = "DELETE FROM tb_user WHERE id_user = $id";
    if (mysqli_query($conn, $deleteSql)) {
        echo "<div class='alert alert-success' role='alert'>User deleted successfully</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>Error deleting record: " . mysqli_error($conn) . "</div>";
    }
}

// Fetch users with pagination
$sql = "SELECT id_user, nama, email, password, telp FROM tb_user LIMIT $offset, $records_per_page";
$result = mysqli_query($conn, $sql);
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
  </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Kelola User</title>
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
            <a class="nav-link active" aria-current="page" href="indexadmin.php">Home</a>
          </li>
        </div>
        <div class="btn-group">
           <h5> ADMIN </h5> 
          </a>
        </div>
      </div>
    </div>
  </nav>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Kelola User</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id_user'] . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo "<td>" . $row['telp'] . "</td>";
                        echo "<td><a href='adminkelolauser.php?delete=" . $row['id_user'] . "' class='btn btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus pengguna ini?\")'>Hapus</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Tidak ada data pengguna</td></tr>";
                }
                ?>
            </tbody>
        </table>
    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                // Previous page
                if ($page > 1) {
                    echo "<li class='page-item'><a class='page-link' href='adminkelolauser.php?page=" . ($page - 1) . "'>Previous</a></li>";
                } else {
                    echo "<li class='page-item disabled'><a class='page-link' href='#'>Previous</a></li>";
                }

                // Numbered pages
                $total_pages = ceil(mysqli_query($conn, "SELECT COUNT(*) FROM tb_user")->fetch_row()[0] / $records_per_page);
                for ($i = 1; $i <= $total_pages; $i++) {
                    if ($i == $page) {
                        echo "<li class='page-item active'><a class='page-link' href='#'>" . $i . "</a></li>";
                    } else {
                        echo "<li class='page-item'><a class='page-link' href='adminkelolauser.php?page=" . $i . "'>" . $i . "</a></li>";
                    }
                }

                // Next page
                if ($page < $total_pages) {
                    echo "<li class='page-item'><a class='page-link' href='adminkelolauser.php?page=" . ($page + 1) . "'>Next</a></li>";
                } else {
                    echo "<li class='page-item disabled'><a class='page-link' href='#'>Next</a></li>";
                }
                ?>
            </ul>
        </nav>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script><h5> admin </h5> berada pada pojok kanan dari navbar 
</body>
</html>
<?php
mysqli_close($conn);
?>