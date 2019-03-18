<?php
date_default_timezone_set("Europe/Amsterdam");
$times = date("H:i:sA");

if ($times > "24.00") {
	$message = "Goede nacht!";
	$image = "backgrounds/night.png";
}

if ($times > "06.00") {
	$message = "Goede morgen!";
		$image = "backgrounds/morning.png";
}

if ($times > "12.00") {
	$message = "Goede middag!";
		$image = "backgrounds/afternoon.png";
}

if ($times > "18.00") {
	$message = "Goedenavond!";
		$image = "backgrounds/evening.png";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Goede PHP Jeroen Faasse</title>
</head>

<body style="background-image: url(<?php echo $image;?>); background-size: cover; background-repeat: no-repeat;">
	<?php include "header.php"; ?>
	<h1 style=" color: orange; font-size: 60px; text-align: center; "><?php echo $message; ?></h1>
    <h2 style="color: orange; font-size: 45px; text-align: center; margin-top: 1%;"><?php echo $times; ?></h2>
   	<?php include "footer.php";
 ?>
</body>
</html>
