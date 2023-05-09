
<?php
    
  //initialize the numbers as an empty string
  $numbers = "";
    
  //get the user min
  $userMin = intval($_POST["user-min"]);

  // get the user max
  $userMax = intval($_POST["user-max"]);

  $counter = $userMin;

  // if min is bigger than max
  if ($userMax < $userMin) {
    echo "Please make your min smaller than your max!";
  }

  //use a while loop to display the numbers from the user min to the user max
  while ($counter <= $userMax) {

    // build the string of numbers with a linebreak each time
    $numbers = $numbers . $counter . "<br>";

    // increment the counter
    $counter = $counter + 1;
  }
  
  echo $numbers;
?>