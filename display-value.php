<?php
   $firstName = "Alex";
   $lastName = "Tonies";
   $age = 65;

   $total = 55.72;
   $avg = 25.67;

   $isValid = true;
   // echo or print
   echo "any text or any html element";
   echo"<hr>";
   echo ($firstName);
   echo"<hr>";
   // or using print
   print($lastName);

   echo "<hr>$firstName";
   echo"<hr>";
   print($firstName." ".$lastName);
   echo"<hr>";
   echo('the total is '. $total);
   //with print you can't print more than one variable but with echo you can
   echo"<hr>";
   echo $firstName, $lastName, $age;
   echo "<hr>";
   echo('the total is $total');
   $docTitle = "annen;"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>    <?php echo($docTitle)?></title>
</head>
<body>
  <ul>
    <li><?php echo($firstName); ?></li>
    <li><?php echo($lastName); ?></li>

  </ul>
</body>
</html>