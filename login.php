<?php 
session_start();
require 'function.php';
if( isset($_SESSION["admin"]) ) {
  header("Location: admin/menu.php");
  exit;
}

// // cek cookie
// if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
//   $id = $_COOKIE['id'];
//   $key = $_COOKIE['key'];

//   // ambil username berdasarkan id
//   $result = mysqli_query($koneksi, "SELECT username FROM user WHERE id = $id");
//   $row = mysqli_fetch_assoc($result);

//   // cek cookie dan username
//   if( $key ===  hash('sha256', $row['username'])) {
//     $_SESSION['login'] = true;
//   }
// } 

if( isset($_SESSION["login"]) ) {
  header("Location: index.php");
  exit;
}

if( isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

  // cek username
  if( mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if( password_verify($password, $row["password"]) ) {
      // set session
      $_SESSION["login"] = true;
      $_SESSION["username"] = $row["username"];

      header("Location: index.php");
      exit;
    }
  }

  $error = true;

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
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="js/script.js"></script>
      <title>Ravi Tour And Travell</title>
    </head>

<body>
  <!-- nav -->
  <?php include('header.php'); ?>

<!-- login -->
<section style="background-image: url(b.jpg);">
<div class="container">
  <div class="row">
    <div class="col s12 m6 offset-m3">
      <div class="card-panel formlogin">
        <div class="center">
        <i class="material-icons blue-text text-lighten-2 large">account_circle</i>
        </div>
        <h5 class="center">Silahkan Login</h5>
        <form action="" method="post">
          <?php if( isset($error)) :?>
            <p style="color: red; font-style: italic;" class="center">Username / Password Salah</p>
          <?php endif; ?>
        <div class="input-field">
          <i class="material-icons prefix blue-text text-lighten-2">account_circle</i>
          <input id="icon_prefix" name="username" type="text" class="validate" required maxlength="20">
          <label for="icon_prefix">Username</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix blue-text text-lighten-2">vpn_key</i>
          <input id="icon_prefix-password" name="password" type="password" class="validate" required>
          <label for="icon_prefix-password">Password</label>
        </div>
        <p>
      <!-- <label class="remember">
        <input type="checkbox" name="remember" />
        <span>Remember Me</span>
      </label> -->
    </p>
      <button type="submit" name="login" class="waves-effect waves-light btn blue lighten-2 btnlogin">Login</button>
      </form>
      <div class="center">
      <a  href="loginad.php">Login Sebagai Admin</a></div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- footer -->
  <?php include('footer.php'); ?>

    </body>
  </html>
        