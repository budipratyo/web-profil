<?php
		include '../../koneksi.php';

		$query = "DELETE FROM prestasi WHERE id_prestasi = '$_GET[id]' ";

		if (mysqli_query($koneksi, $query)) {
			echo "<script>
                  alert('berhasil menghapus prestasi');
                  window.location.assign('../prestasi.php');
              </script>";
		} else{
			echo "<script>
                  alert('gagal menghapus prestasi');
                  window.location.assign('../prestasi.php');
              </script>";
		}
?>