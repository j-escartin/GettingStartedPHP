<?php
  //equal sign shows a default value if no value is specified
  function math($a , $b = 2, $op = "multiply") {
    if($op == 'add'){
      return $a + $b;
    } elseif ($op == 'subtract'){
      return $a - $b;
    } elseif ($op == 'divide'){
      return $a / $b;
    }
    return $a * $b;
  }
  
  echo math(2, 4, 'add');

  //named argument
  echo math(3, op: 'add');