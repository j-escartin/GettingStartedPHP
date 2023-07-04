<?php
  $x = 2;

  $result = match($x){
    -2, -1, 0 => '$x is negative',
    1 => '$x is 1',
    2 => '$x is 2',
    default => '$x is default',
  };

  echo $result;
?>