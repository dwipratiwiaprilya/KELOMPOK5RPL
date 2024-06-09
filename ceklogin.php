<?php

$conn = mysqli_connect("localhost", "root", "", "rental_db");

if (isset($_POST["btnlogin"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE nama='$username'");
    $data = mysqli_fetch_array($query);
    if (mysqli_num_rows($query) >0) {
        if(password_verify($password,$data['password'])){
            session_start();
            $_SESSION['nama']=$data['nama'];
            echo "<script>alert('Login berhasil.');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Password salah, silahkan coba lagi.');</script>";
            echo "<script>window.location.href = 'login.php';</script>"; 
}}  else {
        echo "<script>alert('Username tidak ditemukan. Silahkan coba lagi atau buat akun baru.');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
}}
?>