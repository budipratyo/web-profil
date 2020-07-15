<?php
		include '../../koneksi.php';

		$query = "DELETE FROM fasilitas WHERE id_fasilitas = '$_GET[id]' ";

		if (mysqli_query($koneksi, $query)) {
			echo "<script>
                  alert('berhasil menghapus fasilitas');
                  window.location.assign('../fasilitas.php');
              </script>";
		} else{
			echo "<script>
                  alert('gagal menghapus fasilitas');
                  window.location.assign('../fasilitas.php');
              </script>";
		}
?>