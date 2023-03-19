<?php
if(isset($_POST["submit-button"])){ // check if the form has been submitted
  $input = $_POST["numeric-values"];
  $option = $_POST['calculation-option'];
  
  if(!empty($input) && ctype_digit(str_replace(" ", "", $input))) { // check if the input contains only digits and spaces
    $numbers = explode(" ", $input); // split the input into an array of individual numbers
    $numbers = array_map('intval', array_map('trim', $numbers)); // convert the elements to integers and remove whitespace
    
    // perform the selected calculation
    switch ($option) {
      case 'auto-sum':
        $sum = array_sum($numbers);
        echo "The sum of the numbers is: " . $sum;
        break;
      case 'Average':
        $sum = array_sum($numbers);
        $count = count($numbers);
        $average = $sum / $count;
        echo "The average of the numbers is: " . $average;
        break;
      case 'max':
        $max_number = max($numbers);
        echo "The maximum number is: " . $max_number;
        break;
      case 'min':
        $min_number = min($numbers);
        echo "The minimum number is: " . $min_number;
        break;
      default:
        echo "Please select a calculation option.";
        break;
    }
  } else {
    echo "Please enter valid numeric values only.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Assignment 2</title>
</head>
<body>
  <form action="index.php" method="POST">
    <label>Enter your all numeric values with spaces:</label>
    <input type="text" name="numeric-values">
    <br>
    <input type="radio" name="calculation-option" id="auto-sum" value="auto-sum" >
    <label for="auto-sum">Auto sum</label>
    <br>
    <input  type="radio"  name="calculation-option" id="Average" value="Average" >
    <label for="Average">Average</label> 
    <br>
    <input  type="radio"  name="calculation-option" id="Max" value="max" >
    <label for="Max">Max</label>
    <br>
    <input  type="radio" name="calculation-option" id="Min" value="min" >
    <label for="Min">Min</label>
    <br>
    <button type="submit" name="submit-button" id="submit-button" value="submit-button">Calculate</button>

  </form> 
 
</body>
</html>
