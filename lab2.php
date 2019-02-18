
<?php

$rand = (mt_rand(1,10));

 for($i=1; $i<=10; $i++){		//optelsom
          echo '<p>', $i,'+',$rand,'=',($i+$rand),'<br>','</p>';
      }
       for($i=1; $i<=10; $i++){ //aftreksom
          echo '<p>', $i,'-',$rand,'=',($i-$rand),'<br>','</p>';
      }
       for($i=1; $i<=10; $i++){	//deelsom
          echo '<p>', $i,':',$rand,'=',($i/$rand),'<br>','</p>';
      }
       for($i=1; $i<=10; $i++){	//vermenigvuldiging
          echo '<p>', $i,'x',$rand,'=',($i*$rand),'<br>','</p>';
      }
 for($i=1; $i<=10; $i++){
          echo '<p>', $i,'x',6,'=',($i*6),'<br>','</p>';
      }




$numbers = array(3,5,8,12); 

foreach ($numbers as $value) {
    echo '<div class="tafel">';
      for($i=1; $i<=10; $i++){
          echo '<p>', $i,'x',$value,'=',($i*$value),'<br>','</p>';
      }
      echo '</div>';
  }
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
