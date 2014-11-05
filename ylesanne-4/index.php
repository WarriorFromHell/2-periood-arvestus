
<?php
		 $name = "arvestus";
 		 $value = "Cookie on olemas";
 		 $expire = time() + 20;

setcookie($name, $value, $expire);


		?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 4 - Küpsised</title>
  </head>

  <body>
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
   
   <?php 

if (isset($_COOKIE["arvestus"])) {
	$arvestus = $_COOKIE["arvestus"];
} else {
	$arvestus= "Cookie ei ole olemas";
}
$arvestus =isset($_COOKIE["arvestus"]) ? $_COOKIE["arvestus"] : "";
echo $arvestus;
?>
  </body>
</html>
