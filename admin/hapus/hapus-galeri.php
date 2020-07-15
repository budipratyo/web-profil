<?php
		include '../../koneksi.php';

		$query = "DELETE FROM galeri WHERE id_galeri = '$_GET[id]' ";

		if (mysqli_query($koneksi, $query)) {
			echo "<script>
                  alert('berhasil menghapus galeri');
                  window.location.assign('../galeri.php');
              </script>";
		} else{
			echo "<script>
                  alert('gagal menghapus galeri');
                  window.location.assign('../galeri.php');
              </script>";
		}
?>