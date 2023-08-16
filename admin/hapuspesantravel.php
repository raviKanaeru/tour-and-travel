<?php 
session_start();
require 'config.php';
$id = $_GET["id"];

if( hapuspesantravel($id) > 0) {
	echo "<script>
				alert('Data Berhasil Dihapus!');
				document.location.href ='pesanantravel.php';
				</script>
		";
} else{
	echo "<script>
				alert('Data Gagal Dihapus!');
				document.location.href ='pesanantravel.php';
				</script>
		";
}
 ?>

