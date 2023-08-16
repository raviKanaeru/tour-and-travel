<?php 
session_start();
if( isset($_SESSION["admin"]) ) {
  header("Location: admin/menu.php");
  exit;
}
require 'function.php';
$tours = query("SELECT * FROM tour ORDER BY rand() LIMIT 3");
$travels = query("SELECT * FROM travel ORDER BY rand() LIMIT 3");

 ?>
<!DOCTYPE html>
  <html>
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
      <title>Ravi Tour And Travel</title>
    </head>

    <body>
      <!-- nav -->
      <?php include('header.php'); ?>

      <!-- slider -->
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/slider/1.jpg">
            <div class="caption left-align">
              <h3>Ravi Tour And Travel</h3>
              <h5 class="light grey-text text-lighten-3">Menyediakan Tour dan Travel Internasional</h5>
            </div>
          </li>
           <li>
            <img src="img/slider/2.jpg">
            <div class="caption right-align">
              <h3>Wujudkan Impian Mu</h3>
              <h5 class="light grey-text text-lighten-3">Atur perencanaan liburan mu</h5>
            </div>
          </li>
           <li>
            <img src="img/slider/3.jpg">
            <div class="caption center-align">
              <h3>Harga Lebih Hemat</h3>
              <h5 class="light grey-text text-lighten-3">Harga lebih hemat dan terjangkau</h5>
            </div>
          </li>
           <li>
            <img src="img/slider/4.jpg">
            <div class="caption right-align">
              <h3>Web Penjualan Tiket Terpecaya</h3>
              <h5 class="light grey-text text-lighten-3">Penjualan tiket terpecaya dan jujur</h5>
            </div>
          </li>
        </ul>
      </div>

      <!-- services -->
      <section class="services grey lighten-3 scrollspy" id="services">
        <div class="container">
          <div class="row">
            <h3 class="light center grey-text text-darken-3">Keuntungan Memilih Kami</h3>
            <div class="col m4 s12">
              <div class="card-panel center">
                <i class="material-icons medium">attach_money</i>
                <h5>Harga Tiket Relatif Murah</h5>
                <p>Harga tiket tour dan travell yang kami tawarkan bervariasi murah dan kompetitif</p>
              </div>
            </div>
            <div class="col m4 s12">
              <div class="card-panel center">
                <i class="material-icons medium">alarm_on</i>
                <h5>Proses Pemesanan Cepat</h5>
                <p>Proses pemesanan cukup mudah dengan menghubungi kontak WA kami</p>
              </div>
            </div>
            <div class="col m4 s12">
              <div class="card-panel center">
                <i class="material-icons medium">location_city</i>
                <h5>Penginapan Bintang Lima</h5>
                <p>Tersedia Hotel Bintang Lima dan Fitur lainnya seperti kolam renang dan taman</p>
              </div>
            </div>
            
          </div>
        </div>
      </section>

      

      <!-- client -->
      <div class="parallax-container">
        <div class="parallax"><img src="img/slider/4.jpg"></div>
          <div class="container client " >
            <h3 class="center light white-text">Telah Bekerja Sama Dengan</h3>
            <div class="row">
                <div class="col m4 s12 center">
                  <img src="img/client/hotel4.png">
                </div>
                <div class="col m4 s12 center">
                  <img src="img/client/pesawat.png">
                </div>
                <div class="col m4 s12 center">
                  <img src="img/client/hotel.png">
                </div>
            </div>
          </div>
      </div>

      <!-- tour -->
      <section class="Destinasi grey lighten-3">
        <div class="container">
          <div class="row">
            <h3 class="light center grey-text text-darken-3">Destinasi Tour</h3>
            <?php foreach( $tours as $tour) :?>
            <div class="col m4 s12">
              <div class="card hoverable">
                    <div class="card-image">
                      <img src="img/tour/<?php echo $tour["gambar"]; ?>">
                    </div>
                    <div class="card-content">
                      <h6 class=" blue-text text-lighten-1"><?php echo $tour["nama_tour"]; ?></h6>
                      <p>Starting ( /person):</p>
                      <p class="red-text">IDR <?php echo $tour["harga"]; ?></p>
                      <span><i class="material-icons tiny">place</i> <?php echo $tour["lokasi"]; ?></span><br>
                      <span><i class="material-icons tiny">query_builder</i> <?php echo $tour["durasi"]; ?></span>
                    </div>
                    <div class="card-action">
                      <a href="paket_detail.php?id=<?php echo $tour["id_tour"]; ?>" class="btn blue darken-2">Detail</a>
                    </div>
                  </div>
            </div>
          <?php endforeach; ?>       
          </div>
          <div class="center">
          <a href="tour.php" ><button class="btn waves-effect waves-light blue darken-2">View More Tour Destinasi<i class="material-icons right">send</i></button></a>
          </div>
        </div>
      </section>

      <!-- travel -->
      <section class="Destinasi grey lighten-3 scrollspy" id="services">
        <div class="container">
          <div class="row">
            <h3 class="light center grey-text text-darken-3">Destinasi Travel</h3>
            <?php foreach( $travels as $travel) :?>
            <div class="col m4 s12">
              <div class="card hoverable">
                    <div class="card-image">
                      <img src="img/travel/<?php echo $travel["foto"]; ?>">
                    </div>
                    <div class="card-content">
                      <h6 class=" blue-text text-lighten-1"><?php echo $travel["nama_travel"]; ?></h6>
                      <p>Starting ( /person):</p>
                      <p class="red-text">IDR <?php echo $travel["harga"]; ?></p>
                      <span><i class="material-icons tiny">place</i> <?php echo $travel["lokasi"]; ?></span><br>
                      <span><i class="material-icons tiny">query_builder</i> <?php echo $travel["durasi"]; ?></span>
                    </div>
                    <div class="card-action">
                      <a href="paket_detail.php?id=<?php echo $travel["id_travel"]; ?>" class="btn blue darken-2">Detail</a>
                    </div>
                  </div>
            </div>
          <?php endforeach; ?>       
          </div>
          <div class="center">
          <a href="tour.php" ><button class="btn waves-effect waves-light blue darken-2">View More Tour Destinasi<i class="material-icons right">send</i></button></a>
          </div>
        </div>
      </section>

      <!-- Gallery -->


      <!-- footer -->
<?php include('footer.php'); ?>


    </body>
  </html>
        