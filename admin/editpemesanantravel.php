<?php 
session_start();


if( !isset($_SESSION["admin"]) ) {
  header("Location: ../loginad.php");
  exit;
}
require 'config.php';

// ambil data di url
$id =$_GET["id"];

// query data siswa berdasarkan id

$data = query("SELECT * FROM pesanan_travel WHERE nomor_pemesanan = $id")[0];

// cek apakah tombol submit dudah ditekan atau belum
if( isset($_POST["edit"])){
  if( ubahtravel($_POST) > 0) {
    echo "<script>
        alert('Data Berhasil Diubah!');
        document.location.href ='pesanantravel.php';
        </script>
    ";
  } else {
    echo "<script>
        alert('Data Gagal Diubah!');
        document.location.href ='pesanantravel.php';
        </script>
    ";
  }

}
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
      <title>Dashboard</title>
</head>
<body class="grey lighten-4">
	<!-- Navbar goes here -->

    <!-- Page Layout here -->
    <div class="row">

        <!-- sidebar -->
        <?php include('sidebar.php'); ?>
        <!-- endsidebar -->

      <div class="col s9" style="padding-right: 0; padding-left: 0; /*height: 992px;*/ float: right;">
        <!-- nav -->
        <?php include('nav.php'); ?>
        <!-- endnav -->

        <!-- awal -->
        <div class="travel" style="margin-left: 20px;margin-right: 20px; margin-top: 20px;"> 
        <div class="card white">
        <div class="card-content black-text">
          <span class="card-title" style="margin-bottom: 20px;">Edit Pesanan Travel</span>
          <hr>

          <form action="" method="post">
            <input type="hidden" name="nomor_pemesanan" value="<?php echo $data["nomor_pemesanan"]; ?>">

          <div class="row">
        <div class="col s6" style="margin-top: 20px;">
          <label>Status Pesanan</label>
            <select class="browser-default" name="status">
              <option value="" disabled selected><?php echo $data["status"]; ?></option>
              <option value="Pending">Pending</option>
              <option value="Cancel">Cancel</option>
              <option value="Success">Success</option>
            </select>
        </div>
        </div>
        <div class="row">
          <div class="col s6">
            <button class="waves-effect waves-light btn" name="edit" type="submit">Edit</button>
          </div>
        </div>

        </form>
      </div>
        <!-- akhir -->

        
      </div>
      <!-- footer -->
        <?php include('footer.php'); ?>
        <!-- endfooter -->
      </div>

    </div>
	
</body>
</html>