<?php
 
 /**
  * Data Sanitation
  */
//  if(! empty( $_POST )){
//   foreach( $_POST as &$value) {
//    // $value = trim($value);
//   }

//   echo $_POST['email'] . ' ' . $_POST['message'];

//   $_POST['email'] = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL);
//   $_POST['message'] = filter_var( $_POST['message'], FILTER_SANITIZE_ADD_SLASHES);

//   echo "<br/>" . $_POST['email'];
//   echo "<br/>" . $_POST['message'];
  
//  }

/**
 * Sending Email Practice
 */
$message = '';
foreach ($_POST as $key => $value){
  if(is_array($value)){
    $value = implode(', ', $value);
  }
  $message .= ucfirst($key) . "is $value \n\n";
}

$to = "James Vincent Castillanes Escartin<javines@gmail.com>";
$subject = "Hello A Practice";
$from = $_POST['firstName'] . "<" . $_POST['email'] . ">";

$headers = 'From: ' . $from . "\r\n" .
'Reply-To: ' . $from . "\r\n" .
'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
  echo "<h3>Your Email has been sent</h3>";
}