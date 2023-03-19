<?php 

$integers = [5,8,2,9,6];

function acceptOneArgument($anyArray) {
  $result = array_product($anyArray);
  return $result;
}
echo "answer is " . acceptOneArgument($integers);

?>