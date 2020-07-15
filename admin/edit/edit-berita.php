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

    <title>edit berita</title>
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
            <a class="nav-link text-white" href="../prestasi.php"><i class="fas fa-trophy mr-2"></i> Prestasi</a><hr class="bg-secondary">
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
            <a class="nav-link text-white" href="../galeri.php"><i class="fas fa-photo-video mr-2"></i> Galeri</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../logout.php"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a><hr class="bg-secondary">
          </li>
        </ul>
      </div>
      
      <?php

        include '../../koneksi.php';

        $id = $_GET["id"];
        $query = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$id' ");
        $result = mysqli_fetch_assoc($query);

      ?>

      <div class="col-md-9 p-5 pt-2">
      <h3><i class="fas fa-tv mr-2"></i>EDIT BERITA</h3>
      <hr>

      <form method="post" enctype="multipart/form-data">
          <div class="form-group">
              <img src="../../asset/img/berita/<?= $result['foto'] ?>" width="100"> <br>
              <label for="exampleFormControlFile1">Pilih Foto</label>
              <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Judul Berita</label>
              <input type="text" name="judul" value="<?= $result['judul']?>" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Deskripsi</label>
              <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"><?= $result['deskripsi']?></textarea>
            </div>
            <button class="btn btn-warning"><a href="../berita.php" class="text-white" style="text-decoration: none;">Kembali</a></button>
            <button class="btn btn-primary text-white" type="submit" name="submit" >Edit</button>
        </form>
    </div>

    <?php   

          include '../../koneksi.php';

          if (isset($_POST['submit'])) {
            
            $foto = $_FILES['foto']['name'];
            $judul = $_POST['judul'];
            $deskripsi = $_POST['deskripsi'];

            $dir = '../../asset/img/berita/'. $foto;

            if (!$foto) {
              

              $query = "UPDATE berita SET judul ='$judul', deskripsi ='$deskripsi' WHERE id_berita='$id' ";
              $result = mysqli_query($koneksi, $query);

              if (!$result) {
                echo "<script>
                    alert('gagal mengubah berita');
                    window.location.assign('edit-berita.php');
                </script>";
              } else {
                echo "<script>
                    alert('berhasil mengubah berita');
                    window.location.assign('../berita.php');
                </script>";
              }

            } else {

              move_uploaded_file($_FILES['foto']['tmp_name'], $dir);
              $query = "UPDATE berita SET foto ='$foto', judul ='$judul', deskripsi ='$deskripsi' WHERE id_berita='$id' ";
              $result = mysqli_query($koneksi, $query);

              if (!$result) {
                echo "<script>
                    alert('gagal mengubah berita');
                    window.location.assign('edit-berita.php');
                </script>";
              } else {
                echo "<script>
                    alert('berhasil mengubah berita');
                    window.location.assign('../berita.php');
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