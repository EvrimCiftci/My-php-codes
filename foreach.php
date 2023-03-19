<?php 

$colors = ["Red" , "Yellow" , "Green" , "Blue"];

foreach($colors as $color) {
echo " $color " ;
}
echo "<br>";
$modules = [
  
  "module1" =>"HTML AND CSS",
  "module2" => "JavaScript",
  "module3" => "PHP"
  
];
 
  foreach($modules as $module){
  
  echo " <br> $module ";

}

foreach($modules as $key=>$module){
echo"<br>" .$key;
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
  <dl>
     <dt>Eyyo:</dt>
     <DD>Whaaa </DD>
    </dl>
    <ol>
      <?php 
      foreach($modules as $module){
      echo"<li>$module</li>";
      }
      ?>
    </ol>
    
      
      <dl>
        <dt>
        <?php  foreach($modules as $key=>$module){
        echo $key;
      } ?>
        </dt>
        <DD><?php  foreach($modules as $key=>$module){
        echo $module;
      } ?></DD>
       </dl>
</body>
</html>