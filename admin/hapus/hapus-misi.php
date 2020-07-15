<?php
		include '../../koneksi.php';

		$query = "DELETE FROM misi WHERE id_misi = '$_GET[id]' ";

		if (mysqli_query($koneksi, $query)) {
			echo "<script>
                  alert('berhasil menghapus misi');
                  window.location.assign('../visi.php');
              </script>";
		} else{
			echo "<script>
                  alert('gagal menghapus misi');
                  window.location.assign('../visi.php');
              </script>";
		}
?>