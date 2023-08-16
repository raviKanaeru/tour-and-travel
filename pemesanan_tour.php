<?php 
session_start();
if( !isset($_SESSION["login"])) {
      header("Location: login.php");
      exit;
}
if( isset($_SESSION["admin"]) ) {
  header("Location: admin/menu.php");
  exit;
}
require 'function.php';
$username = $_SESSION["username"];
$info = query("SELECT * FROM pesanan_tour WHERE username = '$username'");

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
      <!-- js -->
      <script src="js/script.js"></script>
      <title>Ravi Tour And Travel</title>
</head>
<body>
	<!-- navbar -->
	<?php include('header.php'); ?>

	<!-- detail -->
	<section class="grey lighten-3">
		<div class="container">
      <div class="row">
        <div class="col m6 s12 offset-m3">
            <div class="card-panel lime lighten-5">
              <h5 class="center">Perhatian</h5>
            <span>Untuk melakukan Konfirmasi pembayaran lebih lanjut anda harus mengklik tombol view pada list pemesanan anda , lalu anda screenshot Dan kirim Ke Nomor WA.
            </span>
            </div>
          </div>
      </div>
		    <div class="row">
			     <div class="col s12">
            <div class="card-panel">
                <table class="responsive-table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nomor Pemesanan</th>
                      <th>Nama Lengkap</th>
                      <th>Nama Tour</th>
                      <th>Jumlah tiket</th>
                      <th>harga</th>
                      <th>Total</th>
                      <th>tanggal keberangkatan</th>
                      <th>status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                    <tbody>
                      <?php $id=1; ?>
                      <?php foreach($info as $data) :?>
                        <tr>
                          <td><?php echo $id; ?></td>
                          <td><?php echo $data["nomor_pemesanan"]; ?></td>
                          <td><?php echo $data["nama_lengkap"]; ?></td>
                          <td><?php echo $data["nama_tour"]; ?></td>
                          <td><?php echo $data["jumlah_tiket"]; ?></td>
                          <td>IDR <?php echo $data["harga"]; ?></td>
                          <td>IDR <?php echo $data["total"]; ?></td>
                          <td><?php $tanggal = $data["tanggal_berangkatan"]; 
                            echo date("l, d-F-Y", strtotime($tanggal)); ?></td>
                          <td><?php echo $data["status"]; ?></td>
                          <td>
                              <a href="view_tour.php?id=<?php echo $data["nomor_pemesanan"]; ?>">View</a>
                              <a href="cancel_tour.php?id=<?php echo $data["nomor_pemesanan"]; ?>">Cancel</a>

                          </td>
                        </tr>
                      <?php $id++; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table> 
                  </div> 
            </div>
			 </div>
		</div>
	</section>

  <!-- footer -->
  <?php include('footer.php'); ?>
	
</body>
</html>