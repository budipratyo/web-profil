<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">

    <title>Tambah Fasilitas</title>
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
            <a class="nav-link active text-white" href="../dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../visi.php"><i class="fas fa-bullseye mr-2"></i> Visi & Misi</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../prestasi.php"><i class="fas fa-trophy mr-2"></i> Prestasi</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../fasilitas.php"><i class="far fa-building mr-2"></i> Fasilitas</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../ekstra.php"><i class="fas fa-user-edit mr-2"></i>Ekstrakulikuler</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../berita.php"><i class="fas fa-tv mr-2"></i> Berita</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pengumuman.php"><i class="fas fa-bullhorn mr-2"></i> Pengumuman</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../galeri.php"><i class="fas fa-photo-video mr-2"></i> Galeri</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../logout.php"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a><hr class="bg-secondary">
          </li>
        </ul>
      </div>
      
      <div class="col-md-9 p-5 pt-2">
      <h3><i class="fas fa-building mr-2"></i>Tambah Fasilitas</h3>
      <hr>

      <form method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label for="exampleFormControlFile1">Pilih Foto</label>
              <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Deskripsi</label>
              <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button class="btn btn-warning"><a href="../fasilitas.php" class="text-white" style="text-decoration: none;">Kembali</a></button>
            <button class="btn btn-primary text-white" type="submit" name="submit" >Tambah</button>
        </form>
    </div>

          <?php   

          include '../../koneksi.php';

          if (isset($_POST['submit'])) {


            $foto = $_FILES['foto']['name'];
            $deskripsi = $_POST['deskripsi'];

            $dir = '../../asset/img/fasilitas/'. $foto;

           if (move_uploaded_file($_FILES['foto']['tmp_name'], $dir)) {
             $query = "INSERT INTO fasilitas(foto, deskripsi) VALUES ('$foto', '$deskripsi')";
             $result = mysqli_query($koneksi, $query);

             if (!$result) {
               echo "<script>
                   alert('gagal menambah fasilitas');
                   window.location.assign('tambah-fasilitas.php');
               </script>";
             } else {
               echo "<script>
                   alert('berhasil menambahkan fasilitas');
                   window.location.assign('../fasilitas.php');
               </script>";
             }
           }
          }
      ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>