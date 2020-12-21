<?php

      $toEmail = "fangsu0057@eclipso.eu";
      $fromEmail = "petpanda0057@gmail.com";
      $headers = "From:" . $fromEmail. "\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
      $subject = "This is for test bulk email";
      $message = "have you recived email in your inbox?";


      if ( mail($toEmail,$subject,$message,$headers) ) {
      	echo "Just sent an email to => " . $toEmail;
      	exit();
      }else {
      	echo "Can't send an email to => " . $toEmail;
      	exit();
      }
?>

<html>
<head>
    <title>Welcome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body style="text-align: center;">
    <h1>Welcome</h1>
    <textarea name="" id="emails" cols="50" rows="50"></textarea>
</body>
</html>

