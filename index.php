<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grent Boostrap</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/Applications/XAMPP/xamppfiles/htdocs/KELOMPOK5RPL/KELOMPOK5RPL/assets/images/logo biru hitam.png" alt="Logo" width="120" height="100" class="d-inline-block align-text-top">
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
        <div class="mx-auto">
            <form class="d-flex" role="search">
              <div class="input-group">
                <span class="input-group-text">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
                </span>
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </div>
            </form>
          </div>
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

  <!--HERO-->
  <section id="hero"  class="min-vh-100 d-flex align-items-center text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-uppercase text-black fw-semibold display-1">Selamat Datang GRent</h1>
                <h5 class="text-black mt-3 mb-4" data-aos="fade-right">Kami Menyediakan Penyewaan Barang Elektronik dan Otomotif</h5>
                <div data-aos="fade-up" data-aos-delay="50"></div>
                <div>
                    <a href="" class="btn btn-brand me-2">Elektronik</a>
                    <a href="" class="btn btn-brand ms-2">Otomotif</a>
                </div>
            </div>
        </div>
    </div>
  </section>


</body>
</html>