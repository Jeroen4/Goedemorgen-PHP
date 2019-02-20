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
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<title>Jeroen Faasse</title>
</head>
<body>
</body>
</html>
