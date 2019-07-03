
<?php
require_once '../vendor/autoload.php';
require_once ('../src/php/mdp.php');
// $connectionCV = new PDO('mysql:hostname=localhost;dbname=CV-Web','root','');
// $infos = [
// 'nom' => $_POST['nom'],
// 'mail' => $_POST['mail'],
// 'entreprise' => $_POST['entreprise'],
// 'ville' => $_POST['ville'],
// 'message' => $_POST['message'],
// ];
// $sql = "INSERT INTO contact (nom,mail,entreprise,ville,message) VALUES (:nom ,:mail,:entreprise,:ville,:message)";
// $statement= $connectionCV->prepare($sql);
// $statement->execute($infos);

$nom = ($_POST['nom']);
$mail = ($_POST['mail']);
$objet= ($_POST['objet']);
$ville = ($_POST['ville']);
$msg= ($_POST['message']);
// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465,'ssl'))
->setUsername ($user_mail)
->setPassword($pswd_mail);


// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message($objet))
->setFrom(['cocospee69@gmail.com' => $mail])
->setTo(['corantin.spee@ynov.com' => 'Corantin'])
->setBody($msg)
;

// Send the message
$result = $mailer->send($message);

 header('Location: http://'.$_SERVER['HTTP_HOST'].'/index.php');
// exit()

?>