
<?php
require_once '../vendor/autoload.php';
require_once ('../src/php/login.php');
// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465,'ssl'))
->setUsername ($user_mail)
->setPassword($pswd_mail);


// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Nouveau Contact sur ton Site'))
->setFrom(['cocospee69@gmail.com' => 'Site CV'])
->setTo(['corantin.spee@ynov.com' => 'Corantin'])
->setBody($message)
;

// Send the message
$result = $mailer->send($message);

?>