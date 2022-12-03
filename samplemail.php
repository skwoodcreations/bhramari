<?php
 require_once "Mail.php";
 
 $from = "TESTING<test@bhramari.in>";
 $to = "TESTING <test.checkmail@gmail.com>";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you doing today.?";
 
 $host = "103.14.98.202";
 $port = "25";
 $username = "test@bhramari.in";
 $password = "A2h?4k6k";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>
