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
    <strong>Jeu</strong> : 
    <?php echo $competence['categorie']; 
    echo $competence['domaine'];
    echo $competence['nom'];    
    echo $competence['niveau_competences'];
    ?>
   </p>
<?php
}

$statement->closeCursor(); // Termine le traitement de la requête

?>
</section>