<?php
$connectionCV = new \PDO('mysql:hostname=localhost;dbname=CV-Web','root','');
$statement= $connectionCV->prepare('SELECT * FROM competences');

?>
<section id="competences">
        <div class="sectionTitle">Competences</div>
<?php 
while ($competence = $statement->fetch())
{
?>
    <p>
    <strong>Jeu</strong> : <?php echo $competence['nom']; ?><br />
    <?php echo $competence['possesseur'];echo $competence['prix']; ?><br />
    <?php echo $competence['console'];echo $competence['nbre_joueurs_max']; ?><br />
    <?php echo $competence['possesseur']; echo $donnees['nom']; echo $competence['commentaires']; ?>
   </p>
<?php
}

$statement->closeCursor(); // Termine le traitement de la requête

?>
</section>