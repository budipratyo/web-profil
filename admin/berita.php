<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">

    <title>Berita</title>
  </head>
  <body>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
      <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN <b>SMK MUHAMMADIYAH 4 KENDAL</b></a>
    </nav>
    
    <div class="bg-primary">  </div>
    <div class="row no-gutters mt-5">
      <div class="cold-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="visi.php"><i class="fas fa-bullseye mr-2"></i> Visi & Misi</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="prestasi.php"><i class="fas fa-trophy mr-2"></i> Prestasi</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="fasilitas.php"><i class="far fa-building mr-2"></i> Fasilitas</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="ekstra.php"><i class="fas fa-user-edit mr-2"></i>Ekstrakulikuler</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="berita.php"><i class="fas fa-tv mr-2"></i> Berita</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="pengumuman.php"><i class="fas fa-bullhorn mr-2"></i> Pengumuman</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="galeri.php"><i class="fas fa-photo-video mr-2"></i> Galeri</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="logout.php"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a><hr class="bg-secondary">
          </li>
        </ul>
      </div>
      
      <div class="col-md-9 p-5 pt-2">
      <h3><i class="fas fa-tv mr-2"></i>BERITA</h3>
      <hr>
      
      <a href="tambah/tambah-berita.php" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Tambah Berita</a>
      

      <table class="table table-bordered mt-4">
          <thead class="text-center">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Foto</th>
              <th scope="col">Judul</th>
              <th scope="col">Deskripsi</th>
              <th colspan="2"  scope="col">Aksi</th>
            </tr>
          </thead>
      <?php
        include '../koneksi.php';

        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM berita");
        while ($result = mysqli_fetch_assoc($query)) {
      ?>
          <tbody class="text-center">
            <tr>
              <th scope="row"><?= $no++ ?></th>
              <td><img src="../asset/img/berita/<?= $result['foto'] ?>" width="100"></td>
              <td><?= $result['judul'] ?></td>
              <td><?= $result['deskripsi'] ?></td>
              <td>
                <a href="edit/edit-berita.php?id=<?= $result['id_berita']; ?>" class="btn btn-success">Edit</a>
              </td>
              <td>
                <a href="hapus/hapus-berita.php?id=<?= $result['id_berita']; ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          </tbody>
      <?php  } ?>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>