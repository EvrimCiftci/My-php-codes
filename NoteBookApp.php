<?php 
$UserInputArray = array();
$emptyUserInputArray = array();
if(isset($_POST['submit'])){
  $userInput = $_POST["UserInput"];
  if (empty($userInput)) {
    array_push($emptyUserInputArray, $userInput);
  }
  else{
  $filteredInput = filter_var($userInput, FILTER_SANITIZE_STRING);
  array_push($UserInputArray,$filteredInput);
  file_put_contents('NoteBookApp.txt', serialize($UserInputArray) . PHP_EOL, FILE_APPEND);
  if (file_exists('NoteBookApp.txt')) {
    $userInputArray = unserialize(file_get_contents('NoteBookApp.txt'));
  }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evrim's NoteBook</title>
  <link rel="stylesheet" href="NoteBookApp.css">
</head>
<body>
  <div class="notebook">
      <?php 

      if(isset($_POST['submit'])){
      if (file_exists('NoteBookApp.txt')) {
      $file = fopen('NoteBookApp.txt', 'r');
     
      
       if ($file) {
        while (($line = fgets($file)) !== false) {
          $data = unserialize($line);
          echo $data[0] . "<br>";
        }
        fclose($file);
      } 
    }
    else if (!file_exists('NoteBookApp.txt')) {
        echo "please make sure you write a note before submit it  !";
      }
    }
    if (isset($_POST['reset'])) {
      // Delete the text file
      if (!file_exists('NoteBookApp.txt')) {
      echo "you don't have note to delete";
      }
      else{
      unlink('NoteBookApp.txt',);
      
      // Reset the arrays
      $UserInputArray = array();
      $emptyUserInputArray = array();
      }
    }
    
  
        ?>     
  
  </div>
  <form action="NoteBookApp.php" method="POST">
    <input type="text" id="userInput" name="UserInput">
    <input type="submit" name="submit" id="submit">
    <button type="submit" name="reset">Reset the note book</button>
  </form>
</body>
</html>

