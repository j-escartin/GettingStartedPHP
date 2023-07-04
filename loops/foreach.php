<?php 
  $colors = array('red', 'green', 'blue',);

  foreach ($colors as $color) {
      echo '<p>' . $color . '</p>';
    }

  
    //associative array
    $home_town = array(
      'Joe' => 'Middletown, NY',
      'Erin' => 'We Chester, PA',
    );

    foreach ($home_town as $name => $town) {
          echo '<p>'. $name.'is located in '. $town. '</p>';
        }
?>