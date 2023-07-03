<?php
  // This is commented

  /*
  Long Comment 
  */
  echo 'Hello World!';

  $age =  12;

	echo $age; //printing

	$doubleAge = $age * 2;

	echo $doubleAge;

  //constant variables
  define('JAMESAGE', 19);
  echo JAMESAGE;
  
  //DOUBLE QUOTE VS SINGLE QUOTE

  $name = 'Joe';
	echo "Hello, $name";

	echo 'Hello, ' . $name . ' ! '; //String Concatenation

	echo 'Welcome to Joes\'s Website'; // Escape Character
/*
	\n - new line
*/
?>
