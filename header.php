<!-- navbar -->
  <div class="navbar-fixed">
        <nav class="light-blue accent-3">
          <div class="container">
            <div class="nav-wrapper">
              <a href="index.php" class="brand-logo">Tour And Travel</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="tour.php">Paket Tour</a></li>
                <li><a href="travel.php">Paket Travel</a></li>

            <?php if(isset($_SESSION["login"])) {?>
              <!-- pemesanan trigger -->
               <ul id="pemesanan1" class="dropdown-content">
                    <li><a href="pemesanan_tour.php">Tour</a></li>
                    <li><a href="pemesanan_travel.php">Travel</a></li>
                </ul>
                <!-- pemesanan trigger -->
               <ul id="pemesanan2" class="dropdown-content">
                    <li><a href="pemesanan_tour.php">Tour</a></li>
                    <li><a href="pemesanan_travel.php">Travel</a></li>
                </ul>
              <!-- pemesanan Trigger -->
                    <li><a class="dropdown-trigger" href="#!" data-target="pemesanan1">Pemesanan<i class="material-icons right">arrow_drop_down</i></a></li>

              <!-- Dropdown Structure -->
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                  <ul id="dropdown2" class="dropdown-content">
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                 <!-- Dropdown Trigger -->
                     <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><?php echo $_SESSION["username"]; ?><i class="material-icons right">arrow_drop_down</i></a></li>
                     
              <?php }else{ ?>

                    <ul id="profil1" class="dropdown-content">
                    <li><a href="login.php">login</a></li>
                    <li><a href="registrasi.php">registrasi</a></li>
                  </ul>
                  <ul id="profil2"class="dropdown-content">
                    <li><a href="login.php">login</a></li>
                    <li><a href="registrasi.php">registrasi</a></li>
                  </ul>
                 <!-- Dropdown Trigger -->
                     <li><a class="dropdown-trigger" href="#!" data-target="profil1">Login / Register<i class="material-icons right">arrow_drop_down</i></a></li>
              <?php } ?>

              </ul>
            </div>
          </div>
        </nav>
      </div>

      <?php if( isset($_SESSION["login"])) { ?>

      <!-- side nav -->
      <ul class="sidenav" id="mobile-nav">
              <li><div class="user-view">
                <div class="background">
                  <img src="img/portfolio/2.png">
                </div>
                <a href="#user"><img class="circle" src="img/profil/default.png"></a>
                <a class="dropdown-trigger white-text" href="#!" data-target="dropdown2"><?php echo $_SESSION["username"]; ?><i class="material-icons right">arrow_drop_down</i></a>
              </div></li>
              <li><a href="tour.php">Paket Tour</a></li>
              <li><a href="travel.php">Paket Travel</a></li>
              <!-- pemesanan Trigger -->
              <li><a class="dropdown-trigger" href="#!" data-target="pemesanan2">Pemesanan<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

      <?php } else{ ?>

        <!-- side nav -->
      <ul class="sidenav" id="mobile-nav">
              <li><div class="user-view">
                <div class="background">
                  <img src="img/portfolio/2.png">
                </div>
                <a href="#user"><img class="circle" src="img/profil/default.png"></a>
                <a class="dropdown-trigger white-text" href="#!" data-target="profil2">Login / Registrasi<i class="material-icons right">arrow_drop_down</i></a>
              </div></li>
              <li><a href="tour.php">Paket Tour</a></li>
              <li><a href="travel.php">Paket Travel</a></li>

      </ul>
      <?php } ?>