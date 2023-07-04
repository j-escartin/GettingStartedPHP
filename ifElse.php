<?php
  $is_logged_in = false;
  
  if ($is_logged_in){
    echo '<h3>Welcome back, user!</h3>';
  } else {
    echo '<h3>Welcome to the site</h3>';
  }

  //Alternative syntax
  if($is_logged_in) :
    echo '<h3>Welcome back, user!</h3>';
  else :
    echo '<h3>Welcome to the site</h3>';
  endif;

  // Yoda Conditionals
  //Comparing variables is always at the right side.
?>