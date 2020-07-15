<?php
		include '../../koneksi.php';

		$query = "DELETE FROM pengumuman WHERE id_pengumuman = '$_GET[id]' ";

		if (mysqli_query($koneksi, $query)) {
			echo "<script>
                  alert('berhasil menghapus pengumuman');
                  window.location.assign('../pengumuman.php');
              </script>";
		} else{
			echo "<script>
                  alert('gagal menghapus pemgumuman');
                  window.location.assign('../pengumuman.php');
              </script>";
		}
?>