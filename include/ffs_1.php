<a href="#modal1" class="js-modal a-modal">Ouvrir la boite modal</a>
<aside id="modal1" class="modal-content" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: flex">
    <div class="modal-wrapper js-modal-stop">
    <h3 id="titre-formulaire">1er partie du formulaire</h3>

    <div class="wrapper-elements-ffs">

        <div class="wrapper-lab-input-ffs">
            <label class="label-ffs" for="titre">titre de la vidéo : </label>
            <input type="text" name="titre" id="titre" class="input-ffs">
        </div>

        <div class="wrapper-lab-input-ffs">
            <label for="type" class="label-ffs">Type de la vidéo : </label>
            <input type="text" name="type" id="type" class="input-ffs">
        </div>

    </div>

    <div id="wrapper">
            <label for="genre" class="label-ffs-g">genre : </label>
            <div class="wrapper-checkbox">

            <?php $tabGenre = [
                    "genre" => "Comédie : ", "Drame : ", "Action : ", "Historique : ", "Western : ", "Aventure : ", "Triller : ", "Policier : ", "Fantastique : ", "Science-Fiction : ", "Horreur : ", "Comédie-Dramatique : ", "Documentaire : ", "film-d'amour : "
                    ];
                    foreach($tabGenre as $key => $genre){
                        echo "<div class=checkbox>".$genre."<input type=checkbox name=genre id=genre></div>"; }?>
            </div>
        </div>

        <div class="wrapper-elements-ffs">
            <label for="couleur">couleur : </label>
            <div><input type="radio" name="couleur" id="couleur" class="label-ffs">oui</div>
            <div><input type="radio" name="couleur" id="couleur" class="label-ffs">non</div>
        </div><br>
                    
        <button class="js-modal-close">Fermer la boite modal</button>

                        
    </div>  
</aside>