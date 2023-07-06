<?php $form_complete = true;?>

<!-- putting action to demonstrate data sanitization -->
<form name="detail" method="POST" action="process">

  <?php
    if(isset($_POST['firstName']) && empty(trim($_POST['firstName']))){
      echo "<p>Name is Required</p>";
      $form_complete = false;
    }
  ?>
  <label for="firstName">First Name</label>
  <input type="text" name="firstName" placeholder="First Name"/>

  <?php
    $email_regex = '^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^';
    if (isset($_POST['email']) && empty(trim($_POST['email']))) {
      echo "<p>Please enter your email address</p>";
      $form_complete = false;
    } else if (isset($_POST['email']) && ! preg_match($email_regex, $_POST['email'])){
      echo "<p>Please enter a valid email address</p>";
      $form_complete =false;
    }
      
  ?>
  <label for="email">Email</label>
  <input type="email" name="email" placeholder="@example.com"/>

  <p>What topics do you like?</p>
  <input type="checkbox" name="topics[]" value="HTML"/> <label for="HTML">HTML</label>
  <input type="checkbox" name="topic[]" value="CSS"/> <label for="CSS">CSS</label><br/>

  <label for="message">Message</label> <br/>
  <textarea name="message" rows="5"></textarea> <br/><br/>

  <button type="submit">Submit</button>

</form>

<?php

if($form_complete) {
  foreach($_POST as $key => $value){

    if(is_array($value)){
      $value = implode(', ',$value);
    }
    echo "<p><b>" . ucfirst($key) . "</b> is $value </p>";
  }
}
?>


