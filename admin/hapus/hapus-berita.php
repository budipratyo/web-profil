<?php
		include '../../koneksi.php';

		$query = "DELETE FROM berita WHERE id_berita = '$_GET[id]' ";

		if (mysqli_query($koneksi, $query)) {
			echo "<script>
                  alert('berhasil menghapus berita');
                  window.location.assign('../berita.php');
              </script>";
		} else{
			echo "<script>
                  alert('gagal menghapus berita');
                  window.location.assign('../berita.php');
              </script>";
		}
?>