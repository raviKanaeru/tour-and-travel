<?php 
session_start();
if( isset($_SESSION["admin"]) ) {
  header("Location: admin/menu.php");
  exit;
}
require 'function.php';

// ambil data yang dikirimkan
$id = $_GET["id"];

$travel = query("SELECT * FROM travel WHERE id_travel = $id");

if( isset($_POST["pesan"])) {
  if( pesantravel($_POST) > 0) {

      header("Location: pemesanan_travel.php");
       
    ;
  
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
      <title>Ravi Tour And Travel</title></head>
<body>
	<!-- navbar -->
	<?php include('header.php'); ?>
	
	<!-- detail travel -->
	 <section class="Destinasi blue-grey lighten-5">
        <div class="container">
          <div class="card">
            <div class="card-content">
              <div class="row">
                <?php foreach($travel as $data) : ?>
                <div class="col m7 s12">
              	<img class="responsive-img" src="img/travel/<?php echo $data["foto"]; ?>">
            </div>
            <div class="col m5 s12">
              <h5 class="light"><b><?php echo $data["nama_travel"]; ?></b></h5>
              <h6>Starting ( /person):</h6>
              <h6 class="red-text"><b>IDR <?php echo $data["harga"]; ?></b></h6>
              <span><i class="material-icons tiny">place</i> <?php echo $data["lokasi"]; ?></span><br>
              <span><i class="material-icons tiny">query_builder</i> <?php echo $data["durasi"]; ?></span>
            </div> 
              </div>
            </div>
            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a href="#book">Book Now</a></li>
              </ul>
            </div>
            <div class="card-content">
              <?php require('pesan_travel.php'); ?>
              <div id="itinerary">
              </div>
          </div>
<?php endforeach; ?>
        </div>
      </div>
      </section>

    

      <!-- footer -->
      <?php include('footer.php'); ?>
</body>
</html>