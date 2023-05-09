<?php
  
  //initialize the counter ot 0
  $counter = 0;
    
  //initialize the numbers as an empty string
  $numbers = "";
    
  //get the user number
  $userNumber = intval($_POST["user-number"]);

  //use a a while loop to display the numbers from 0 up to the user number
  while ($counter <= $userNumber) {

    // build the string of numbers with a linebreak each time
    $numbers = $numbers . $counter . "<br>";

    // increment the counter
    $counter++;
  }
  
  echo $numbers;
?>