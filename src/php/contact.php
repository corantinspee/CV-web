<?php
require_once('PDO.php');
$connectionCV = new \PDO('mysql:hostname=localhost;dbname=CV-Web','root','');
$statement= $connectionCV->prepare('INSERT * FROM competences');
$competence = $statement->fetch()
?>


<section id="contact">
<div class="sectionTitle">Contact</div>
    <div class="ligne maxwidth spaceevenly">
        <div class="social">
        <div class="information">
        <img src="/img/smartphone-call.svg">0619485781</a></li>
        </div>
        <div class="information">
        <a  href="https://www.linkedin.com/in/corantin-spee-69950b11b/"><img src="/img/in.png" class="logo" ></a>
        </div>
        <div class="information">
        <a  href=""><img src="/img/facebook.svg" class="logo"></a>   
        </div>
    </div>
    <div class="social">  
        <form action="script_mail.php" method="post">
            <p>Votre Mail : <input type="text" name="mail" /></p>
            <p>Votre Nom : <input type="text" name="nom" /></p>
            <p>Votre Entreprise : <input type="text" name="entreprise" /></p>
            <p>Votre Ville : <input type="text" name="ville" /></p>
            <p>Votre Message : <textarea  name="message" cols="30" rows="15"></textarea></p>
            <p><input type="submit" value="OK"></p>
        </form>
        <?php
        $infos = [
        'nom' => $nom,
        'mail' => $mail,
        'entreprise' => $entreprise,
        'ville'=> $ville,
        'message'=> $message,
        ];
        $sql = "INSERT INTO contact (nom,mail,entreprise,ville,message) VALUES (:nom ,:mail,:entreprise,:ville,:message)";
        $statement= $CV_connection->prepare($sql);
        $statement->execute($infos);
        // $mail=['email'];
        // $nom=['nom'];
        // $message=['message'];
        // $entreprise=['entreprise'];
        // $ville=['ville'];
        ?>
        </div>
    </div> 
    <?php 
    $connectionCV->exec('INSERT INTO contact (nom_prenom, adresse_mail,entreprise,ville,message )
    VALUES($nom,$mail,$entreprise,$ville,$message )');
    ?>     
</section>