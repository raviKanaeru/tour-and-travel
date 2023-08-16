<?php 

session_start();


if( !isset($_SESSION["admin"]) ) {
  header("Location: ../loginad.php");
  exit;
}
require 'config.php';

$users = query("SELECT * FROM user");

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
          <span class="card-title" style="margin-bottom: 20px;">Paket Tour</span>
          <hr>
          <table>
        <thead>
          <tr>
              <th>No</th>
              <th>Username</th>
              <th>No Hp</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <?php $i=1; ?>
            <?php foreach($users as $user) :?>
            <td><?php echo $i; ?></td>
            <td><?php echo $user["username"]; ?></td>
            <td><?php echo $user["no_hp"]; ?></td>
          </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
        </div>
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