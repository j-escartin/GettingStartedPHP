<?php
  $current = 1;
  $previous = 0;
  $next = null;

  while ($current < 200){
    echo "<p>$current</p>";
    $next = $previous + $current;
    $previous = $current;
    $current = $next;
  }
?>