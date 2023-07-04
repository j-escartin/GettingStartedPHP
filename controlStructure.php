<?php

$min = 1;
$max = 50;
$guess = 61;
$num = 16;

$num = rand($min, $max);
//if else
if($num == $guess){
  $response = "You guessed it right!";
} elseif (($num > $guess) && ($guess > 1)){
  $response = "Guessed number is too low!";
} elseif (($num < $guess) && ($guess < 50)){
  $response = "Guessed number is too high!";  
} else {
  $response = "Guessed number is out of range!";
}

echo $response;
?>