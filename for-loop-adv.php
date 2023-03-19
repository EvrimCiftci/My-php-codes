<?php 

$examResults = [6,7,4,2,8,9,10,5,2,6,3];

$passExams = [] ;
$failExams = [] ;

for($i=0;$i < count($examResults);$i++){
if($examResults[$i]>=5){
array_push($passExams,$examResults[$i]);
}
else{
array_push($failExams, $examResults[$i]);
}

}
print_r ($passExams)  ; 
echo "<br>";  
for($i= 0 ; $i<count($failExams);$i++){
echo" $failExams[$i] ";
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
  <ul>
 <li>
  <p>You failed!!!</p>
   <?php foreach($failExams as $result){
    echo " $result ";} ?>
    </li>
  </ul>
  <ul>
 <li>
  <p>You passed!!!</p>
   <?php foreach($passExams as $result){
    echo " $result ";} ?>
    </li>
  </ul>
</body>
</html>
