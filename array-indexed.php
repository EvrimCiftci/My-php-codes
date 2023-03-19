<?php

$myFirstArray = [20 , 15.30 , true];


$employess = ["Evrim ciftci","fikocan","rodrigo"];

$employess[] = "henrique";
/* for multiple-lines comment */
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 <ul>
 <li><?php echo "$myFirstArray[1]"; ?></li>
 <li><?php echo "$myFirstArray[0]"; ?></li>
 <li><?php echo "$employess[1]"; ?></<li>
 <li><?php echo "$employess[2]"; ?></li>
 <li><?php echo "$employess[3]"; ?></li>
 <li><?php echo "$employess[0]"; ?></li>
 </ul>
</body>
</html>