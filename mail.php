 

<?php
     $to      = 'luvumbu.n@gmail.com';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: contact@bokonzi.com' . "\r\n" .
     'Reply-To: contact@bokonzi.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
 ?>

