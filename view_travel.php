<?php 
session_start();
if( isset($_SESSION["admin"]) ) {
  header("Location: admin/menu.php");
  exit;
}
require 'function.php';
$id = $_GET["id"];

$pesan = query("SELECT * FROM pesanan_travel WHERE nomor_pemesanan = $id");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--Import Google Icon Font-->
      <link rel="stylesheet" href="css/icon.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- my css -->
      <link rel="stylesheet" type="text/css" href="css/style.css?=1.1">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- jquery -->
      <script src="js/jquery-3.5.1.min.js"></script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="js/script.js"></script>
	<title>Ravi Tour dan Travel</title>
</head>
<body>
	<!-- navbar -->
	<?php include('header.php'); ?>

	<!-- view -->
	<section class="grey lighten-4">
		<div class="container">
			<div class="row">
				<?php foreach($pesan as $info) :?>
			    <div class="col s12 m6 offset-m3">
			      <div class="card-panel">
			      	<h4 class="center">Tour Dan Travel</h4>
			      	<hr>
			        <p>Terima kasih telah memesan tiket tour dan travel dari kami.</p>
			        <p><b>Nomor Pemesanan : </b><?php echo $info["nomor_pemesanan"]; ?></p>
			        <p><b>Nama Paket Pemesanan : </b><?php echo $info["nama_travel"]; ?></p>
			        <p><b>Harga Pemesanan : </b>IDR <?php echo $info["harga"]; ?></p>
			        <p><b>Jumlah Tiket Pemesanan : </b><?php echo $info["jumlah_tiket"]; ?></p>
			        <p><b>Total : </b>IDR <?php echo $info["total"]; ?></p>
			        <p><b>Tanggal Keberangkatan : </b><?php $tanggal = $info["tanggal_berangkat"];
			        							echo date("l, d-F-Y", strtotime($tanggal)); ?></p>
			        <p>untuk melakukan pembayaran silahkan screenshot dan hubungi Ke nomor WA ini 081365701957</p>
			      </div>
			    </div>
			<?php endforeach; ?>
			  </div>
		</div>
	</section>

	<!-- footer -->
	<?php include('footer.php'); ?>

	
</body>
</html>