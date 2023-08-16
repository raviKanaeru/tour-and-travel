<?php 
session_start();


if( !isset($_SESSION["admin"]) ) {
  header("Location: ../loginad.php");
  exit;
}
require 'config.php';
// cek apakah tombol submit dudah ditekan atau belum
if( isset($_POST["tambah"])){


  if( tambahtravel($_POST) > 0) {
    echo "<script>
        alert('Data Berhasil Ditambahkan!');
        document.location.href ='travel.php';
        </script>
    ";
  } else {
    echo "<script>
        alert('Data Gagal Ditambahkan!');
        document.location.href ='travel.php';
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
          <span class="card-title" style="margin-bottom: 20px;">Tambah Paket Travel</span>
          <hr>

          <form action="" method="post" enctype="multipart/form-data">

          <div class="row">
        <div class="input-field col s6" style="margin-top: 20px;">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="nama_travel" required>
          <label for="first_name">Nama Paket</label>
        </div>
        </div>

        <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="harga" required>
          <label for="first_name">Harga</label>
        </div>
        </div>

        <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="lokasi" required>
          <label for="first_name">Lokasi</label>
        </div>
        </div>

        <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="durasi" required>
          <label for="first_name">Durasi</label>
        </div>
        </div>


        <div class="row">
        <div class="col s6">
          <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="foto" required>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Masukkan Foto">

      </div>
    </div>
        </div>
        </div>

        <div class="row">
          <div class="col s6">
            <button class="waves-effect waves-light btn" type="submit" name="tambah">Tambah</button>
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