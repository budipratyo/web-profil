<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Login</title>

  
   <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="../asset/css/login.css">
</head>
<body>

  <div class="sidenav">
         <div class="login-main-text">
            <h2>HALAMAN ADMIN</h2>
            <h3>WEB PROFIL SMA MUHAMMADIYAH 4 KENDAL</h3>
            <p>Login from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="post">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" name="username" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" name="submit" class="btn btn-black">Login</button>
               </form>
            </div>
         </div>
      </div>

      <?php
        include '../koneksi.php';

        if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result)==0){
          echo "<script>
                  alert('Login Gagal');
                  window.location.assign('login.php');
                </script>";
        } else {
            $_SESSION['admin'] = true;
            echo "<script>
                  alert('Anda Masuk Sebagai Admin');
                  window.location.assign('dashboard.php');
                </script>";
        }
      }
      ?>



</body>
</html>