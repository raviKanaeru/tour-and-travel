<?php 
session_start();
require 'function.php';
$id = $_GET["id"];

if( canceltravel($id) > 0) {
	echo "<script>
			alert('Pemesanan Telah di Cancel');
			document.location.href ='pemesanan_travel.php';
		</script>
		";
} else {
	echo "<script>
			alert('Pemesanan Gagal di Cancel');
			document.location.href ='pemesanan_travel.php';
		</script>
		";
}

 ?>