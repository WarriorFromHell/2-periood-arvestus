<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päring</title>
  </head>

  <body>
   <?php
   $username = "Markus";
   $age = "20";
   ?>
   <a href="result.php"> link </a>
   <br>
   <?php $age = 20;?>
<?php $age_limit = 18;?>
<?php if ($age<$age_limit) {
	echo "Tere " . $username . "! Kahjuks olete liiga noor selle lehekülje külastamiseks.";
	} elseif ($age > $age_limit) {
        echo "Tere " .  $username . "! Olete lehekülje vaatamiseks piisavalt vana";
        }
        ?>

  </body>
</html>
