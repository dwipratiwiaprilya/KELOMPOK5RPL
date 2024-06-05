<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grent Bootstrap</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
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

  <!-- Product Section -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/images/playstation 5.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/images/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/images/3.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-md-6">
        <h1>Playstation 5</h1>
        <p>Rp. 175.000 / Hari</p>
        <div class="d-flex flex-column mb-3">
          <label for="startDate" class="form-label">Tanggal Mulai:</label>
          <input type="date" class="form-control" id="startDate">
        </div>
        <div class="d-flex flex-column mb-3">
          <label for="endDate" class="form-label">Tanggal Selesai:</label>
          <input type="date" class="form-control" id="endDate">
        </div>
        <div class="d-flex align-items-center mb-3">
          <label for="quantity" class="form-label me-2">Jumlah Barang:</label>
          <input type="number" class="form-control" id="quantity" value="1" min="1" style="width: 60px;">
        </div>
        <a href="sewa1.html" type="button" class="btn btn-primary">Sewa Sekarang</a>
      </div>
    </div>

    <!-- Reviews Section -->
    <div class="mt-5">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="detail-product-tab" data-bs-toggle="tab" data-bs-target="#detail-product" type="button" role="tab" aria-controls="detail-product" aria-selected="true">Detail Produk</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Penilaian & Ulasan</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="terms-tab" data-bs-toggle="tab" data-bs-target="#terms" type="button" role="tab" aria-controls="terms" aria-selected="false">Syarat & Ketentuan Perentalan</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="detail-product" role="tabpanel" aria-labelledby="detail-product-tab">
          <!-- Product details here -->
          <p>Deskripsi lengkap produk akan ditampilkan di sini.</p>
        </div>
        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
          <!-- Reviews here -->
          <div class="mt-3">
            <h5>Semua Ulasan</h5>
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Samantha D.</h5>
                <p class="card-text">Lorem ipsum dolor sit amet. Est officia quas vel enim quidem in reprehenderit accusantium ea esse impedit et impedit similique ut odit exercitationem. Id possimus omnis ut quibusdam reprehenderit ut amet incidunt qui expedita eligendi.</p>
                <p class="card-text"><small class="text-muted">Posted on August 14, 2023</small></p>
              </div>
            </div>
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Alex M.</h5>
                <p class="card-text">Lorem ipsum dolor sit amet. Est officia quas vel enim quidem in reprehenderit accusantium ea esse impedit et impedit similique ut odit exercitationem. Id possimus omnis ut quibusdam reprehenderit ut amet incidunt qui expedita eligendi.</p>
                <p class="card-text"><small class="text-muted">Posted on August 15, 2023</small></p>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="terms" role="tabpanel" aria-labelledby="terms-tab">
          <!-- Terms and conditions here -->
          <p>Informasi tentang syarat dan ketentuan perentalan akan ditampilkan di sini.</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
