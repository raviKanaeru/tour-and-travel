<?php 
session_start();
if( isset($_SESSION["admin"]) ) {
  header("Location: admin/menu.php");
  exit;
}
require 'function.php';
$tours = query("SELECT * FROM tour");

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
      <title>Ravi Tour And Travel</title>
    </head>

    <body>
      <!-- navbar -->
<?php include('header.php'); ?>
      
      <!-- tour -->
      <section class="Destinasi">
        <div class="container">
          <div class="row">
            <h3 class="light center grey-text text-darken-3 tittle">Destinasi Tour</h3>
            <?php foreach($tours as $tour) :?>
            <div class="col m4 s12">
              <div class="card">
                    <div class="card-image">
                      <img src="img/tour/<?php echo $tour["gambar"]; ?>">
                    </div>
                    <div class="card-content">
                      <h6 class=" blue-text text-lighten-1"><?php echo $tour["nama_tour"]; ?></h6>
                      <p>Starting ( /person):</p>
                      <p class="red-text">IDR <?php echo $tour["harga"]; ?></p>
                      <span><i class="material-icons tiny">place</i> <?php echo $tour["harga"]; ?></span><br>
                      <span><i class="material-icons tiny">query_builder</i> <?php echo $tour["durasi"]; ?></span>
                    </div>
                    <div class="card-action">
                      <a href="paket_detail.php?id=<?php echo $tour["id_tour"]; ?>"><button class="waves-effect waves-teal btn blue">Detail</button></a>
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
        