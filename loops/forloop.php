<?php
  for($i = 0; $i < 10; $i++) {
    echo "<p>$i</p>";
  }

  //traversing with an array
  $color = array('red', 'green', 'blue');

  for($i = 0; $i < sizeof($color); $i++){
    echo "<p>$color[$i]</p>";
  }
?>