<?php

  $to =  "jason.white@w2m.co.uk";

  $name = $_POST['name'];  
  $phone = $_POST['phone'];

  $subject = $_POST['subject'];

  $from = $_POST['email'];
  
  $headers = "Reply-To: " . $from;
  
  $error_messages = array();

  if( strlen($name) < 1 ) {
    $error_messages[] = "name required";
  }  

  if( strlen($from) < 1 ) {
    $error_messages[] = "email required";
  }

  if( strlen($subject) < 1 ) {
    $error_messages[] = "subject required";
  }

  $body .= "Message from www.new-website.co.uk \r\n\r\n";
  $body .= "Name: " . $name . "\r\n";
  $body .= "Phone No: " . $phone . "\r\n";
  $body .= "Subject: " . $subject . "\r\n";

  $body .= stripslashes($_POST['message']);  

  if(sizeof($error_messages) == 0 && mail($to, $subject, $body, $headers)) {
    echo("success");
  } else {
    foreach( $error_messages as $error_message ) {
      echo "$error_message <br />";
    }
  }

?>