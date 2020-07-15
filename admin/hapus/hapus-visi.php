<?php
		include '../../koneksi.php';

		$query = "DELETE FROM visi WHERE id_visi = '$_GET[id]' ";

		if (mysqli_query($koneksi, $query)) {
			echo "<script>
                  alert('berhasil menghapus visi');
                  window.location.assign('../visi.php');
              </script>";
		} else{
			echo "<script>
                  alert('gagal menghapus visi');
                  window.location.assign('../visi.php');
              </script>";
		}
?>