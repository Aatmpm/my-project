
<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
        <?php
          include 'includes/header.php' ;
         ?>
            <div class="container panel-margin ef">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h1 class="panel-title">Login to make purchase</h1>
                   <form method="post" action="login_submit.php">
                       <div class="form-group">
                         <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                       </div>
                       <div class="form-group">
                         <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                       </div>
                       <button type="submit" class="btn btn primary">Login</button>
                   </form>
                </div>
              </div>
              <div class="panel-footer">
                      Don't Have a Account?Click <a href="signup.php">here</a> to create
              </div>
            </div>
          <?php
          include 'includes/footer.php';
           ?>
  </body>
</html>
