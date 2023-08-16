<?php 
// error_reporting(0);
session_start();
if( isset($_SESSION["admin"]) ) {
  header("Location: admin/menu.php");
  exit;
}
require('function.php');
// ambil data lewat link
$id = $_GET["id"];

// tampilkan data
$tour = query("SELECT * FROM tour INNER JOIN itinerary_tour ON tour.nama_tour = itinerary_tour.nama_tour WHERE id_tour = '$id'");

if( isset($_POST["pesan"])) {
  if( pemesanan($_POST) > 0) {

      header("Location: pemesanan_tour.php");
  
  }else {
    echo  "<script>
        alert('Data Gagal Ditambahkan!');
        document.location.href ='index.php';
        </script>
    ";
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
      <!-- tour -->
      <section class="Destinasi blue-grey lighten-5">
        <div class="container">
          <div class="card">
            <div class="card-content">
              <div class="row">
                <?php foreach($tour as $dtl) : ?>
                <div class="col m7 s12">
              <div class="slider detail">
                <ul class="slides">
                  <li>
                    <img src="img/tour/<?php echo $dtl["gambar"]; ?>"> <!-- random image -->
                  </li>
                </ul>
              </div>
            </div>
            <div class="col m5 s12">
              <h5 class="light"><b><?php echo $dtl["nama_tour"]; ?></b></h5>
              <h6>Starting ( /person):</h6>
              <h6 class="red-text"><b>IDR <?php echo $dtl["harga"]; ?></b></h6>
              <span><i class="material-icons tiny">place</i> <?php echo $dtl["lokasi"]; ?></span><br>
              <span><i class="material-icons tiny">query_builder</i> <?php echo $dtl["durasi"]; ?></span>
            </div>  
              </div>
            </div>
            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a href="#itinerary">Itinerary</a></li>
                <li class="tab"><a href="#book">Book Now</a></li>
              </ul>
            </div>
            <div class="card-content">
              <?php require('itinerary.php'); ?>
              <?php require('pesan.php'); ?>
          </div>
<?php endforeach; ?>
        </div>
      </div>
      </section>

    

      <!-- footer -->
      <?php include('footer.php'); ?>
    </body>
  </html>
        