<?php 
session_start();
require 'config.php';
$id = $_GET["id"];

if( hapustour($id) > 0) {
	echo "<script>
				alert('Data Berhasil Dihapus!');
				document.location.href ='tour.php';
				</script>
		";
} else{
	echo "<script>
				alert('Data Gagal Dihapus!');
				document.location.href ='tour.php';
				</script>
		";
}
 ?>

