<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>

  <body>
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
    <pre><?php print_r($_POST); ?></pre>
<?php
$username = $_POST['username'];
$sex = $_POST['sex'];
$username = isset($_POST["username"]) ? ($_POST["username"]) : "Puudub" ;
$sex = isset($_POST["sex"]) ? ($_POST["sex"]) : "Puudub" ;
if ($username == $_POST["username"] && $sex == $_POST["sex"]) {echo "Tere " . $username . " tundub, et olete " . $sex;} 
elseif ($username = "puudu") echo "Palun minge tagasi ja sisestage nimi.";
elseif ($sex = "puudu") echo "sugu  on puudu.";


?>

    <div><a href="index.php">Mine tagasi</a></div>
  </body>
</html>
