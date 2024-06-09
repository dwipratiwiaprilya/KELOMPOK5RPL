<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR AKUN</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        .eye-icon {
            cursor: pointer;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>
<body>
    <div class="container mt-5 col-5">
        <div class="justify-content-center">
            <div class="card">
                <img src="assets/images/logo biru hitam.png" class="mx-auto" style="width: 300px;" alt="Logo">
                <div class="card-body">
                    <form action="ceklogin.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username"></label>
                            <input type="text" placeholder="Masukkan Nama Pengguna" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 position-relative">
                                <div class="input-group mb-3">
                                    <label for="password"></label>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                    <i class="bi bi-eye eye-icon position-absolute" id="togglePassword"></i>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" id="btnlogin" name="btnlogin">Sign Up</button>
                        <p style="text-align: center;">Belum punya akun?<a href="regis.php"> klik disini</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const password = document.getElementById('password');
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('bi-eye');
            this.classList.toggle('bi-eye-slash');
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
