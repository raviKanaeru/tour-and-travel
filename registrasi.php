<?php 
session_start();
require 'function.php';

if( isset($_POST["register"])) {
  if( registrasi($_POST) > 0 ) {
    echo "<script>
    alert('akun telah ditambahkan');
    document.location.href ='login.php';
    </script>";
  }
  else{
    echo mysqli_error($koneksi);
  }
} 

 ?>
<!DOCTYPE html>
  <html>
    <head>
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
       <script src="js/script.js"></script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <title>Ravi Tour And Travel</title>
    </head>

    <body>
      <!-- navbar -->
      <?php include('header.php'); ?>

    <!-- Form Registrasi -->
    <section style="background-image: url(b.jpg);">
    <div class="container">
      <div class="row">
        <div class="col s12 m6 offset-m3">
          <div class="card-panel register">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="center">
            <i class="material-icons blue-text text-lighten-2 large">account_circle</i>
            </div>
            <h5 class="center">Registrasi</h5>
             <div class="input-field">
              <input placeholder="Silahkan Masukkan Username" name="username" id="username" type="text" class="validate" required autocomplete="off" maxlength="10">
              <label for="username">Username</label>
            </div>
             <div class="input-field">
              <input placeholder="Silahkan Masukkan Nomor Hp" id="no_hp" name="no_hp" type="text" class="validate" required autocomplete="off" maxlength="18s">
              <label for="no_hp">No Hp</label>
            </div>
             <div class="input-field">
              <input placeholder="Silahkan Masukkan Password" id="password" name="password" type="password" class="validate" required>
              <label for="password">Password</label>
            </div>
             <div class="input-field">
              <input placeholder="Silahkan Konfirmasi Password" id="konfirmasi" name="password2" type="password" class="validate" required>
              <label for="konfirmasi">Konfirmasi Password</label>
            </div>
            <button type="submit" name="register" class="waves-effect waves-light btn blue lighten-2 btn-register">Daftar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </section>
          
          

        <!-- footer -->
        <?php include('footer.php'); ?>

    </body>
  </html>
        