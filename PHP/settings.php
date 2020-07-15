
<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Settings</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
<?php include 'includes/header.php'; ?>


      <div class="container panel-margin ef">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title">Change Password</h1>
             <form  action="settings_script.php" method="POST">
                 <div class="form-group">
                   <input type="oldpassword" class="form-control"  pattern=".{6,}" id="oldpassword" name="oldpassword" placeholder="Old Password" required>
                 </div>
                 <div class="form-group">
                   <input type="newpassword" class="form-control" pattern=".{6,}"  id="newpassword" name="newpassword" placeholder="New Password" required>
                 </div>
                 <div class="form-group">
                   <input type="newpassword" class="form-control" id="newpassword"  pattern=".{6,}" name="retypenewpassword" placeholder="Retype New Password" required>
                 </div>
                 <button type="submit" class="btn btn primary">Change</button>
             </form>
          </div>
        </div>
      </div>
      <footer>
        <div class="container">
          <center>
          <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
        </center>
        </div>
      </footer>
  </body>
</html>
