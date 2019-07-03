<?php
// $connectionCV = new \PDO('mysql:hostname=localhost;dbname=CV-Web','root','');

/* SELECT */
// $insertionCV = $connectionCV->exec('');

// $statement= $connectionCV->prepare('SELECT * FROM contact WHERE 
// name = :');
// $statement->execute();

// $allResults =$statement->fetchAll();

// while($row = $statement->fetch()){

// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require_once(__DIR__.'/../src/php/menu.php');
    require_once(__DIR__.'/../src/php/home.php');
    require_once(__DIR__.'/../src/php/formations.php');
    require_once(__DIR__.'/../src/php/competences.php');
    require_once(__DIR__.'/../src/php/experiences.php');
    require_once(__DIR__.'/../src/php/portfolio.php');
    require_once(__DIR__.'/../src/php/contact.php');?>
<script src="app.js"></script>
</body>
</html>