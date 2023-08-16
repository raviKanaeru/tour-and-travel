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

    	<!-- start task -->
      <?php include('sidebar.php'); ?>
      
      <!-- end task -->

      <!-- isi halaman -->
      <div class="col s9" style="padding-right: 0; padding-left: 0; height: 992px; float: right;">
      	<?php include('nav.php'); ?>

		<div class="dashboard" style="margin-left: 20px;">
		<h5>Dashboard</h5>
		<div class="row">
    <div class="col s12 m4">
      <div class="card blue">
        <div class="card-content white-text">
        	<i class="material-icons right large">assignment</i>
          <span class="card-title"><h2>10</h2></span>
          <h5>Paket Tour</h5>
        </div>
        <hr style="width: 80%;">
        <div class="card-action">
          <a style="color: white;" href="#">Selengkapnya...</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card amber accent-4">
        <div class="card-content white-text">
        	<i class="material-icons right large">assignment</i>
          <span class="card-title"><h2>10</h2></span>
          <h5>Paket Travel</h5>
        </div>
        <hr style="width: 80%;">
        <div class="card-action">
          <a style="color: white;" href="#">Selengkapnya...</a>
        </div>
      </div>
    </div>

  </div>
  	<div class="row">
			<div class="col s12 m4">
      <div class="card orange darken-4">
        <div class="card-content white-text">
        	<i class="material-icons right large">drafts</i>
          <span class="card-title"><h2>10</h2></span>
          <h5>Pesanan</h5>
        </div>
        <hr style="width: 80%;">
        <div class="card-action">
          <a style="color: white;" href="#">Selengkapnya...</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card light-green accent-3">
        <div class="card-content white-text">
        	<i class="material-icons right large">group</i>
          <span class="card-title"><h2>10</h2></span>
          <h5>Users</h5>
        </div>
        <hr style="width: 80%;">
        <div class="card-action">
          <a style="color: white;" href="#">Selengkapnya...</a>
        </div>
      </div>
    </div>
		</div>
		</div>
		
		<!-- footer -->
		<?php include('footer.php'); ?>
		<!-- endfooter -->
        

      </div>
      </div>
      <!-- end isi -->
</body>
</html>