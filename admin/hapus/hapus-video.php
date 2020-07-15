<?php
		include '../../koneksi.php';

		$query = "DELETE FROM video WHERE id_video = '$_GET[id]' ";

		if (mysqli_query($koneksi, $query)) {
			echo "<script>
                  alert('berhasil menghapus video');
                  window.location.assign('../video.php');
              </script>";
		} else{
			echo "<script>
                  alert('gagal menghapus video');
                  window.location.assign('../video.php');
              </script>";
		}
?>