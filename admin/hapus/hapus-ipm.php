<?php
		include '../../koneksi.php';

		$query = "DELETE FROM ipm WHERE id_ipm = '$_GET[id]' ";

		if (mysqli_query($koneksi, $query)) {
			echo "<script>
                  alert('berhasil menghapus ipm');
                  window.location.assign('../ipm.php');
              </script>";
		} else{
			echo "<script>
                  alert('gagal menghapus ipm');
                  window.location.assign('../ipm.php');
              </script>";
		}
?>