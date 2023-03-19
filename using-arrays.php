<?php 

$mixedArray = [1, 3, 5, 7, 9, 11, 2, 4, 6, 8, 10];

$oddNumbers = [];
$evenNumbers = [];

foreach ($mixedArray as $number) {
  if ($number % 2 == 0) {
    array_push($evenNumbers, $number);
  } else {
    array_push($oddNumbers, $number);
  }
}

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
  <h1>Odd Numbers</h1>
  <ul>
    <li><?php foreach ($oddNumbers as $number){echo " $number ";} ?></li>
  </ul>
  <h1>Even Numbers</h1>
  <li><?php foreach ($evenNumbers as $number){echo " $number ";} ?></li>
</body>
</html>