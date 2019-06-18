
<?php
require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465,'ssl'))
  ->setUsername('cocospee69@gmail.com')
  ->setPassword('Corantin1998')
  ;

  // Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
  ->setFrom(['cocospee69@gmail.com' => 'John Doe'])
  ->setTo(['corantin.spee@ynov.com' => 'A name'])
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message);
;
?>