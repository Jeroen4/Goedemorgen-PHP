<?php
  include "navbar.php";
  echo "<h1>Hello world! <br></h1>";
  define("helloWorld", "<h1>Hello world!</h1>");  
  echo helloWorld;
  $txt = "Learning PHP";
  echo $txt;
  $txt = helloWorld;
  echo $txt;
  $txt1 = "hello";
  $txt2 = "world!";
  echo "<h1>$txt1  $txt2</h1>";
  $arr = array('Hello','World!');
  echo implode(" ",$arr);

  date_default_timezone_set("Europe/Amsterdam");
  $times = date("H:i:sA");

  if ($times > "24.00") {
    $image = "backgrounds/night.png";
  }

  if ($times > "06.00") {
      $image = "backgrounds/morning.png";
  }

  if ($times > "12.00") {
      $image = "backgrounds/afternoon.png";
  }

  if ($times > "18.00") {
      $image = "backgrounds/evening.png";
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="UTF-8">
  <title>Jeroen Faasse</title>
</head>
<body style="background-image: url(<?php echo $image;?>); background-size: cover; background-repeat: no-repeat;">
</body>
</html>
