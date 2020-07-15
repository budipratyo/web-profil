<?php
	session_start();
	session_destroy();
	echo "<script>
            alert('Anda Akan Keluar !!');
            window.location.assign('login.php');
        </script>";
?>