<?php
		include '../../koneksi.php';

		$query = "DELETE FROM ekstra WHERE id_ekstra = '$_GET[id]' ";

		if (mysqli_query($koneksi, $query)) {
			echo "<script>
                  alert('berhasil menghapus ekstra');
                  window.location.assign('../ekstra.php');
              </script>";
		} else{
			echo "<script>
                  alert('gagal menghapus ekstra');
                  window.location.assign('../ekstra.php');
              </script>";
		}
?>