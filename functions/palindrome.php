<?php
  function is_palindrome($string) {
    $normalized = str_replace(' ', '', strtolower($string));
    return $normalized == strrev($normalized);
  }

  $check_string = "Race Car";

  if(is_palindrome($check_string)){
    echo "This is a palindrome";
  } else{
    echo "This is not a palindrome";
  }
?>