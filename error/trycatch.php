<?php

//the result must be positive
function multiply($a, $b){
  return (($a * $b) > 0) ? $a * $b : throw 
    new Exception("The result is not positive");
}

try {
  echo multiply(5, 4);
} catch (Exception $e) {
  echo $e->getMessage();
}