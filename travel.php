<?php 
session_start();
if( isset($_SESSION["admin"]) ) {
  header("Location: admin/menu.php");
  exit;
}
require 'function.php';
$travels = query("SELECT * FROM travel");

 ?>
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
      <title>Ravi Tour And Travel</title>
</head>
<body>
	<!-- nav -->
	<?php include('header.php'); ?>

	<!-- Travel -->
      <section class="Destinasi grey lighten-3">
        <div class="container">
          <div class="row">
            <h3 class="light center grey-text text-darken-3 tittle">Destinasi Travel</h3>
            
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
                      <a href="travel_detail.php?id=<?php echo $travel["id_travel"]; ?>" class="btn blue darken-2">Detail</a>
                    </div>
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