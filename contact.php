<?php
     $to      = 'alemanpierre@gmail.com';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: alemanpierre@gmail.com' . "\r\n" .
     'Reply-To: alemanpierre@gmail.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
 ?>