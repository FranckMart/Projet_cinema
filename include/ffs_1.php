<!-- ma balise a va servir a ouvrir le modal en cliquant dessus -->
<a href="#modal1" class="js-modal a-modal">Ouvrir la boite modal</a>

<!-- mon aside est sera mon modal -->
<aside id="modal1" class="modal-content" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none">

<!-- le titre de la première partie de mon formulaire -->
<h3>1er partie du formulaire</h3>

    <!-- l'intérieur de mon modal et ce qu'il va contenir -->
    <div class="modal-wrapper js-modal-stop">
        <!-- mon formulaire -->
        <label class="label-ffe" for="titre">titre de la vidéo : </label>
        <input type="text" name="titre" id="titre"><br>

        <label for="type" class="label-ffe">Type de la vidéo : </label>
        <input type="text" name="type" id="type"><br>

        <label for="genre" class="label-ffe">genre : </label><br>
        <?php 

            $tabGenre = [
                "genre" => "Comédie", "Drame", "Action", "Historique", "Western", "Aventure", "Triller", "Policier", "Fantastique", "Science-Fiction", "Horreur", "Comédie-Dramatique", "Documentaire", "film-d'amour"
            ];
                foreach($tabGenre as $key => $genre){?>
                    <input type="checkbox" name="genre" id="genre"><?= $genre . "</br>";}?>
                       
        <label for="couleur" class="label-ffe">couleur : </label>
        <input type="radio" name="couleur" id="couleur" class="label-ffs">oui
        <input type="radio" name="couleur" id="couleur" class="label-ffs">non<br>

        <button class="js-modal-close">Fermer la boite modal</button>
    </div>
                        
    <!-- mon bouton de fermeture du modal -->
</aside>