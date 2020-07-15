<div class="col-sm-12 col-md-4">
          
          <div class="card">
              <img src="asset/img/kepala.jpeg" class="card-img-top" alt="..." width="100px">
            <div class="card-body">
              <h5 class="card-title text-center">Sunarmi, M.Si</h5>
              <p class="text-center">- kepala sekolah -</p>
              <p class="card-text">Bismillahirahmanirahim. Segala puji bagi Allah SWT tuhan semesta alam yang mengajarkan kita dengan pena pengetahuan. Salawat dan salam semoga selalu tercurah kepada teladan sepanjang zaman, Nabi Muhammad SAW.
              </p>
          </div>
          <div class="card-footer text-center">
            <a href="sambutan.php">baca selengkapnya</a>
          </div>
        </div>
        <br>
       
        <div class="card">
          <h3 class="text-center">Pengumuman</h3>
            <ul class="list-group">
               <?php

                  include 'koneksi.php';

                    $query = mysqli_query($koneksi, "SELECT * FROM pengumuman ORDER BY id_pengumuman DESC");
                    while ($result = mysqli_fetch_assoc($query)) {

                ?>
                  <li class="list-group-item"><a href="detail-pengumuman.php?id=<?= $result['id_pengumuman']; ?>"> <?= $result['judul_pengumuman']; ?></a></li>
              <?php  } ?>
            </ul>
        </div>
        <br><br>
        <div class="card">
          <h5 class="text-center mt-2">TANYAKAN SESUATU<hr></h5>
            <div class="main">
         <div class="col-md-15 col-sm-12">
            <div class="login-form">
               <form method="post" action="ee.php">
                  <div class="form-group">
                     <label>Nama Anda</label>
                     <input type="text" class="form-control" name="nama">
                  </div>
                  <div class="form-group">
                     <label>Email Anda</label>
                     <input type="text" class="form-control" name="email">
                  </div>
                  <div class="form-group ">
                      <label> Pertanyaan Anda</label> 
                      <textarea class="form-control" type="text" cols="42" rows="10" name="pertanyaan"></textarea>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary text-white mb-3">Submit</button>
               </form>
            </div>
         </div>
      </div>
        </div>
        </div>