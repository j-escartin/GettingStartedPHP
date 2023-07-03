<?php

  // Indexable array
  $sampleArray = array('james', 'vincent', 'kyle');

  print_r($sampleArray);

  //associative array
  $associativeArray = array(
    'name' => 'James',
    'age' => '19',
  );

  echo '<pre>';
  print_r($associativeArray);
  echo '</pre>';

  print_r($associativeArray['name']);

  //Multidimensional associative array
  $sampleMulti = array(

    'james' => array(
      'name' => 'James',
      'age' => '19',
    ),

    'john' =>array(
      'name' => 'John',
      'age' => '20',
    ),

  );

  echo '<pre>';
  print_r($sampleMulti);
  echo '</pre>';

  print_r($sampleMulti['james']['name']);
?>