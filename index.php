<!DOCTYPE html>
<html>
<head>
  <title>Muhpat kendal</title>
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="asset/style.css">

</head>
<body>

  <!-- topbar -->
  <section id="topbar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <ul class="top-contact">
              <li><i class="fas fa-phone"></i>021-909-222-111</li>
              <li><a href=""><i class="fas fa-envelope"></i>muhpatkendal@sch.id</a></li>
              <li><a href=""><i class="fas fa-bullhorn"></i>PPDB TA 2021/2022 telah dibuka!</a></li>
            </ul>
        </div>
      </div>
    </div>
    </section>

    <!-- header -->
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="brand">
              <img src="asset/img/muhpat.png" height="80" width="80">
             <div class="brand-name">
                <h1>SMA MUHAMMADIYAH 4 KENDAL</h1>
              <h3>sekolah berbasis agama islam</h3>
             </div>
            </div>
          </div>
          <img src="asset/img/akred.png" height="90" width="160">
      </div>
    </header>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-biru">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown" class="nav-item active">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Profil</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="sejarah.php">Sejarah</a>
              <a class="dropdown-item" href="visi.php">Visi dan Misi</a>
              <a class="dropdown-item" href="sambutan.php">Sambutan Kepala Sekolah</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="prestasi.php">Prestasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fasilitas.php">Fasilitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ekstra.php">Ekstrakulikuler</a>
          </li>
          <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Galeri</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="foto.php">Foto</a>
              <a class="dropdown-item" href="video.php">Video</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="ipm.php" class="nav-link">IPM DAERAH</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Kontak</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">PPDB</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>

    <!-- slider -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>
          <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-slide-to="0" class="active"></li>
              <li data-slide-to="1"></li>
            </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="asset/img/staf.JPG" width="1350" alt="">
        </div>
        <div class="carousel-item">
          <img src="asset/img/dua.jpg" width="1350" alt="">
        </div>
        <div class="carousel-item-content">
          <h2>Penerimaan Peserta Didik Baru TA 2021/2022 Telah dibuka!</h2>
          <p>silahkan klik Tombol dibawah jika anda ingin mendaftar di Sma Muhammadiyah 4 Kendal</p>
          <a href="#"><button class="btn btn-utama">DAFTAR PPDB</button></a>
        </div>
      </div>
      <!-- Left and right controls -->
    </div>
  </div>

    <br><br>
    
    <!-- konten -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-8">
          <h2><i class="fas fa-home"></i>Berita Terkini</h2>
          <div class="progress">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          
          <div class="row">           
                  <?php
                  include 'koneksi.php';
                    $query = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 4");
                    while ($result = mysqli_fetch_assoc($query)) {

                ?>
                <div class="col-sm-12 col-md-6">
                 <div class="card">
                  <img src="asset/img/berita/<?= $result['foto'] ?>" height='300'>
                  <div class="card-body">
                    <h5 class="card-title"><?= substr($result['judul'], 0, 25). "..." ?></h5>
                    <p class="card-title"><?= substr($result['deskripsi'], 0, 50)."..." ?></p>
                  </div>
              <p><a href="detail_berita.php?id=<?= $result['id_berita']; ?>" class="btn btn-primary ml-2">Baca selengkapnya</a></p>
              </div>
          </div>
            <?php } ?>
          </div>
          <br>  
          <a href="berita.php" class="btn btn-primary">Lihat Selengkapnya</a>
          <br><br><br>
          <h2><i class="fas fa-images"></i>Foto Terbaru</h2>
          <div class="progress">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="row">
              <?php
                  include 'koneksi.php';

                  $query = mysqli_query($koneksi, "SELECT * FROM galeri ORDER BY id_galeri DESC LIMIT 2");
                    while ($result = mysqli_fetch_assoc($query)) {

              ?>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <img src="asset/img/galeri/<?= $result['foto'] ?>" height="370">
                  <div class="card-body">
                    <h5 class="card-title"><?= $result['deskripsi'] ?></h5>
                  </div>
                </div>
            </div>
            <?php  } ?>
            </div>
            <br>
             <a href="foto.php" class="btn btn-primary">Lihat Selengkapnya</a>
        </div>
        <?php include 'qq.php'; ?>
        </div>
        
      </div>
    </div>

      <br><br>

      <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
    <!-- Footer -->
      <?php 
      include "footer.php";
      ?>







    <script src="asset/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>

</body>
</html>