<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lifestyle Stores</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php
    include 'includes/header.php';
    ?>

    </div>
    <div class="content">
      <div class="banner-image">
        <div class="inner-banner-image">
          <div class="banner_content">
            <h1>We Sell Lifestyle</h1>
            <p>Flat 40% OFF on premium brands</p>
            <a href="products.php">
            <center>
            <button class="btn btn-danger btn-lg active">Shop Now</button>
          </center>
          </a>
          </div>

        </div>

      </div>
    </div>
    <div class="container">
      <div class="items">
        <a href="#">
            <img src="img/watch.jpg" class="thumbnail">
            <div class="caption">
              <h2>WATCHES</h2>
              <p>Choose among the best available in the world</p>

            </div>
        </a>
      </div>
      <div class="items">
        <a href="#">
            <img src="img/shirt.jpg" class="thumbnail">
            <div class="caption">
              <h2>SHIRTS</h2>
              <p>Choose among the best available in the world</p>
            </div>
        </a>
      </div>
      <div class="items">
        <a href="#">
            <img src="img/camera.jpg" class="thumbnail">
            <div class="caption">
              <h2>CAMERA</h2>
              <p>Choose among the best available in the world</p>
            </div>
        </a>
      </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>
  </body>
</html>
