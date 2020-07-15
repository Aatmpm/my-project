<?php
   require ('includes/common.php');
   if (isset($_SESSION['email'])) {
       header('location: products.php');
   }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php include "includes/header.php"; ?>
      <div class="container panel-margin ef">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title f">SIGN UP</h1>
             <form method="post" action="signup_script.php" >
                 <div class="form-group">
                   <input type="name" class="form-control" id="name" name="name" placeholder="Name"  pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                 </div>
                 <div class="form-group">
                   <input type="email" class="form-control" id="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                 </div>
                 <div class="form-group">
                   <input type="password" class="form-control" id="password" name="password" placeholder="Password" pattern=".{6,}" required>
                 </div>
                 <div class="form-group">
                   <input type="Contact" class="form-control" id="Contact" name="Contact" placeholder="Contact" maxlength="10" size="10" required>
                 </div>
                 <div class="form-group">
                   <input type="city" class="form-control" id="city" name="city" placeholder="City" required>
                 </div>
                 <div class="form-group">
                   <input type="address" class="form-control" id="address" name="address" placeholder="Address" required>
                 </div>
                 <button type="submit" class="btn btn primary">Submit</button>
             </form>
          </div>
        </div>
      </div>
      <footer class="gf">
        <div class="container">
          <center>
          <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
        </center>
        </div>
      </footer>
  </body>
</html>
