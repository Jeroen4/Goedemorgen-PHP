<?php
date_default_timezone_set("Europe/Amsterdam");
$times = date("H:i:A");

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
include "header.php";
include "footer.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Goede PHP Jeroen Faasse</title>
</head>
<body style="background-image: url(<?php echo $image;?>); background-size: cover; background-repeat: no-repeat;">
</body>
</html>
