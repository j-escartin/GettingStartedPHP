<?php
  include 'phpnamespace.php';

  function double($a){
    return $a + 2;
  }

  echo '<p>' . double(5) . '</p>';

  echo '<p>'. phpNameSpace\double(5). '</p>';
?>