<section id="competences">
        <div class="sectionTitle">Competences</div>
        <?php 
        $Experiences=[
                ['Type' => 'Stage','Entreprise' => 'ARMEE DE L’AIR','Date' =>'Juin-Juillet 2018','Description' =>'Développer une application pour la gestion des stocks​ , Gérer toutes les interfaces de l’application​ , Exploiter la base de données '],
                ['Type' => 'Stage','Entreprise' => 'ARMEE DE L’AIR','Date' =>'Juin-Juillet 2018','Description' =>'Développer une application pour la gestion des stocks​ , Gérer toutes les interfaces de l’application​ , Exploiter la base de données '],
                ['Type' => 'Stage','Entreprise' => 'ARMEE DE L’AIR','Date' =>'Juin-Juillet 2018','Description' =>'Développer une application pour la gestion des stocks​ , Gérer toutes les interfaces de l’application​ , Exploiter la base de données '],
                ['Type' => 'Stage','Entreprise' => 'ARMEE DE L’AIR','Date' =>'Juin-Juillet 2018','Description' =>'Développer une application pour la gestion des stocks​ , Gérer toutes les interfaces de l’application​ , Exploiter la base de données '],

        ];
        
        foreach ($Experiences as $Experience) { ?>
                <p><?= $Experience['Type'].$Experience['Entreprise'].$Experience['Date'].$Experience['Description'] ?></p> 
                
        <?php } ?>
</section>