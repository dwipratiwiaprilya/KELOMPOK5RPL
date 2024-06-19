<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR AKUN</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-file-label::after {
            content: "Pilih File";
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5 col-5">
        <div class="row justify-content-center">
            <div class="card">
                <img src="assets/images/logo biru hitam.png" class="mx-auto" style="width: 300px;" alt="Logo">
                <div class="card-body col">
                    <form action="cekregis.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="id" name="id" value="">
                        <div class="form-group">
                            <label for="username"></label>
                            <input type="text" placeholder="Masukkan Nama Pengguna" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" placeholder="Masukkan Email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="no_telp"></label>
                            <input type="text" class="form-control" placeholder="Masukkan Nomor Pengguna" id="no_telp" name="no_telp" required>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="foto_ktp">Upload Foto KTP:</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto_ktp" name="foto_ktp" accept="image/*" required>
                                        <label class="custom-file-label" for="foto_ktp">Choose file</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="foto_kk">Upload Foto Kartu Keluarga:</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto_kk" name="foto_kk" accept="image/*" required>
                                        <label class="custom-file-label" for="foto_kk">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="password"></label>
                                    <input type="password" placeholder="Masukkan Password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="col">
                                    <label for="confirm_password"></label>
                                    <input type="password" class="form-control" placeholder="Konfirmasi Password" id="confirm_password" name="confirm_password" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                        <p style="text-align: center;">Already have an account? <a href="login.php">Click Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
</body>
</html>
