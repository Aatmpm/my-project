<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Cart</title>
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
          <div class="container panel-margin cf">
            <table class="table table-hover">
              <?php
              $sum = 0;
              $user_id = $_SESSION['user_id'];
              $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
              $result = mysqli_query($con, $query)or die($mysqli_error($con));
              if (mysqli_num_rows($result) >= 1) {
                  ?>
              <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $sum+= $row["Price"];
                    $id="";
                    $id .= $row["id"] . ",";
                    echo "<tr>
                              <td>" . "#" . $row["id"] . "</td>
                              <td>" . $row["Name"] . "</td>
                              <td>Rs " . $row["Price"] . "</td>
                              <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> X </a></td>
                          </tr>";
                }
                $id = rtrim($id, ",");
                echo "<tr>
                          <td></td>
                          <td>Total</td>
                          <td>Rs " . $sum . "</td>
                          <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                          </tr>";
                ?>

                </tbody>
            <?php
        } else {
            echo "<center><h2>Add items to the cart first!</h2></center>";
        }
        ?>
        <?php
        ?>

            </table>
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
