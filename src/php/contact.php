<?php
$connectionCV = new \PDO('mysql:hostname=localhost;dbname=CV-Web','root','');
$statement= $connectionCV->prepare('INSERT * FROM competences');
$competence = $statement->fetch()
?>


<section id="contact">
<div class="sectionTitle">Contact</div>
    <div class="ligne maxwidth spaceevenly">
        <div class="social">
        <div class="information">    
        <img src="/img/opened-email-envelope.svg">Envoyez un mail</a>
        </div>
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
        <form action="action.php" method="post">
                <p>Votre Mail : <input type="text" name="mail" /></p>
                <p>Votre Nom : <input type="text" name="nom" /></p>
                <p>Votre Message : <textarea  name="message" cols="30" rows="auto"></textarea></p>
                <p><input type="submit" value="OK"></p>
            </form>
        <?php
        $mail=['email'];
        $nom=['nom'];
        ?>
        </div>
    </div> 
    <?php 
    $bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) 
    VALUES(\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')');
    ?>     
</section>