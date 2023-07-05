<?php
  function double(int | float $a){
    return $a * 2;
  }

  echo '<p> ' . double(3.1) . '</p>';
?>