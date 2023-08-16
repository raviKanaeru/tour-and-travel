<?php 
session_start();


if( !isset($_SESSION["admin"]) ) {
  header("Location: ../loginad.php");
  exit;
}
require 'config.php';

$tour = query("SELECT * FROM tour");
$jumlahtour = count($tour);

$travel = query("SELECT * FROM travel");
$jumlahtravel = count($travel);

$pesanan_tour = query("SELECT * FROM pesanan_tour");
$jumlahptour = count($pesanan_tour);

$pesanan_travel = query("SELECT * FROM pesanan_travel");
$jumlahptravel = count($pesanan_travel);

$users = query("SELECT * FROM user");
$jumlahuser = count($users);



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
<body>
	<!-- Navbar goes here -->

    <!-- Page Layout here -->
    <div class="row">

        <!-- sidebar -->
        <?php include('sidebar.php'); ?>
        <!-- endsidebar -->

      <div class="col s9" style="padding-right: 0; padding-left: 0; height: 992px; float: right;">
        <!-- nav -->
        <?php include('nav.php'); ?>
        <!-- endnav -->

        <!-- awal -->
        <div class="dashboard" style="margin-left: 20px;">
		<h5>Dashboard</h5>
		<div class="row">
    <div class="col s12 m4">
      <div class="card blue">
        <div class="card-content white-text">
        	<i class="material-icons right large">assignment</i>
          <span class="card-title"><h2><?php echo $jumlahtour; ?></h2></span>
          <h5>Paket Tour</h5>
        </div>
        <hr style="width: 80%;">
        <div class="card-action">
          <a style="color: white;" href="tour.php">Selengkapnya...</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card amber accent-4">
        <div class="card-content white-text">
        	<i class="material-icons right large">assignment</i>
          <span class="card-title"><h2><?php echo $jumlahuser; ?></h2></span>
          <h5>Paket Travel</h5>
        </div>
        <hr style="width: 80%;">
        <div class="card-action">
          <a style="color: white;" href="travel.php">Selengkapnya...</a>
        </div>
      </div>
    </div>

  </div>
  	<div class="row">
			<div class="col s12 m4">
      <div class="card orange darken-4">
        <div class="card-content white-text">
        	<i class="material-icons right large">drafts</i>
          <span class="card-title"><h2><?php echo $jumlahptour; ?></h2></span>
          <h5>Pesanan tour</h5>
        </div>
        <hr style="width: 80%;">
        <div class="card-action">
          <a style="color: white;" href="pesanantour.php">Selengkapnya...</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card deep-purple accent-2">
        <div class="card-content white-text">
          <i class="material-icons right large">drafts</i>
          <span class="card-title"><h2><?php echo $jumlahptravel; ?></h2></span>
          <h5>Pesanan travel</h5>
        </div>
        <hr style="width: 80%;">
        <div class="card-action">
          <a style="color: white;" href="pesanantravel.php">Selengkapnya...</a>
        </div>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="col s12 m4">
      <div class="card light-green accent-3">
        <div class="card-content white-text">
        	<i class="material-icons right large">group</i>
          <span class="card-title"><h2><?php echo $jumlahuser; ?></h2></span>
          <h5>Users</h5>
        </div>
        <hr style="width: 80%;">
        <div class="card-action">
          <a style="color: white;" href="users.php">Selengkapnya...</a>
        </div>
      </div>
    </div>
  </div>
		
		</div>
        <!-- akhir -->

        <!-- footer -->
        <?php include('footer.php'); ?>
        <!-- endfooter -->
      </div>

    </div>

	
</body>
</html>