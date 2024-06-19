<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $user_number = $_POST['no_telp'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $id=$_POST['id'];   

    if ($password != $confirm_password) {
        die("Password dan konfirmasi password tidak sama.");
    }
    $pw = password_hash($password, PASSWORD_DEFAULT);
    $upload_dir = 'assets/images/';
    $foto_ktp = $upload_dir . basename($_FILES['foto_ktp']['tmp_name']);
    if (!move_uploaded_file($_FILES['foto_ktp']['tmp_name'], $foto_ktp)) {
        die("Gagal mengupload foto KTP.");
    }
    $foto_kk = $upload_dir . basename($_FILES['foto_kk']['name']);
    if (!move_uploaded_file($_FILES['foto_kk']['tmp_name'], $foto_kk)) {
        die("Gagal mengupload foto Kartu Keluarga.");
    }
    $conn = mysqli_connect("localhost", "root", "","rental_db");
    $sql = "INSERT INTO tb_user (id_user, nama, email, telp, password, ktp, kk)
            VALUES ('$id', '$username', '$email', '$user_number', '$password', '$foto_ktp', '$foto_kk')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Akun berhasil Dibuat');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    
    }

?>
