<?php

/*
break is important because it doesn't terminate was case is fulfilled.
*/

  $total = 2;

  switch ($total) {
    case 2 :
      echo '$total is 2';
      break;
    case 5 :
      echo '$total is 5';
      break;
    case 8 :
      echo '$total is 8';
      break;
    default :
      echo '$total is not 2, 5, or 8';
  }

  //Alternative syntax use : instead of {};

  switch ($total) :
    case 2 :
      echo '$total is 2';
      break;
    case 5 :
      echo '$total is 5';
      break;
    case 8 :
      echo '$total is 8';
      break;
    default :
      echo '$total is not 2, 5, or 8';
  endswitch;
?>