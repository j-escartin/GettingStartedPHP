<?php
  $is_logged_in = true;
  $name = null;

  //traditional
  if($is_logged_in){
   $message = "Logged in";
  } else {
    $message = "Not logged in";
  }

  echo $message;

  //ternary operators
  $message = $is_logged_in ? "Logged in" : "Not logged in";
  echo $message;

  //other example
  $name = isset( $name ) ? $name : 'James';
  echo $name;

  //Elvis Ternary Operator
  $name = $name ?: 'James'; 
  echo $name;

?>