<!-- lien vers le modal -->
<a href="#modal2" class="js-modal a-modal">Ouvrir la boite modal</a>
<!-- modalJs en display none -->
<div id="modal2" class="modal-content" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none ">
    <div class="modal-wrapper js-modal-stop">
        <h3 class="h3">Deuxième partie du formulaire</h3>
        <!-- choix realisateur -->
        <div class="wrapper-mid-ffs3">            
            <div class="form-group">
                <label for="realisateur" class="margin1">Réalisateur : </label>
                <input type="text" class="form-control margin3" id="realisateur_nom" name="realisateur_nom" placeholder="Nom : Kurosawa">
                <input type="text" class="form-control margin3" id="realisateur_prenom" name="realisateur_prenom" placeholder="Prénom : Akira">
            </div>
        </div>
            <!--  choix acteur -->
        <div class="wrapper-acteur">
            <div class="form-group">
                <label for="acteur" class="margin1">Acteurs Principaux : </label>
                <input type="text" class="form-control margin3" id="acteur_nom" name="acteur_nom" placeholder="Nom :  Will">
                <input type="text" class="form-control margin3" id="acteur_prenom" name="acteur_prenom" placeholder="Prénom :  Smith">
            </div>

            <!-- <div class="form-group">
                <label for="acteur" class="margin1">Acteurs Principaux : </label>
                <input type="text" class="form-control margin3" id="acteur_nom" name="acteur_nom" placeholder="Nom :  Will">
                <input type="text" class="form-control margin3" id="acteur_prenom" name="acteur_prenom" placeholder="Prénom :  Smith">
            </div>

            <div class="form-group">
                <label for="acteur" class="margin1">Acteurs Principaux : </label>
                <input type="text" class="form-control margin3" id="acteur_nom" name="acteur_nom" placeholder="Nom :  Will">
                <input type="text" class="form-control margin3" id="acteur_prenom" name="acteur_prenom" placeholder="Prénom :  Smith">
            </div>

            <div class="form-group">
                <label for="acteur" class="margin1">Acteurs Principaux : </label>
                <input type="text" class="form-control margin3" id="acteur_nom" name="acteur_nom" placeholder="Nom :  Will">
                <input type="text" class="form-control margin3" id="acteur_prenom" name="acteur_prenom" placeholder="Prénom :  Smith">
            </div> -->

        </div>
        <!-- choix du casting -->
        <div class="wrapper-acteur">
            <div class="form-group">
                <label for="acteur" class="margin1">casting : </label>
                <input type="text" class="form-control margin3" id="acteur_nom" name="acteur_nom" placeholder="Nom :  Will">
                <input type="text" class="form-control margin3" id="acteur_prenom" name="acteur_prenom" placeholder="Prénom :  Smith">
            </div>

            <div class="form-group">
                <label for="acteur" class="margin1">casting : </label>
                <input type="text" class="form-control margin3" id="acteur_nom" name="acteur_nom" placeholder="Nom :  Will">
                <input type="text" class="form-control margin3" id="acteur_prenom" name="acteur_prenom" placeholder="Prénom :  Smith">
            </div>

            <div class="form-group">
                <label for="acteur" class="margin1">casting : </label>
                <input type="text" class="form-control margin3" id="acteur_nom" name="acteur_nom" placeholder="Nom :  Will">
                <input type="text" class="form-control margin3" id="acteur_prenom" name="acteur_prenom" placeholder="Prénom :  Smith">
            </div>

            <div class="form-group">
                <label for="acteur" class="margin1">casting : </label>
                <input type="text" class="form-control margin3" id="acteur_nom" name="acteur_nom" placeholder="Nom :  Will">
                <input type="text" class="form-control margin3" id="acteur_prenom" name="acteur_prenom" placeholder="Prénom :  Smith">
            </div>

        </div>

        <div class=wrapper-midBottom>
        <div class="form-group">
            <!-- choix durée -->
                <label for="duree" class="margin1">Durée : </label>
                <input type="datetime-local" class="form-control" id="duree" name="duree" placeholder="ex : 1h 30min">
            </div>
            <!-- choix origine -->
            <div class="form-group">
                <label for="origine" class="margin1">Origine : </label>
                <input type="text" class="form-control" id="origine" name="origine" placeholder="ex : France">

            </div>
            <!-- choix note -->
            <div class="form-group">
                <label for="note" class="margin1">Note : </label>
                <input type="number" class="form-control" id="note" name="note" min="0" max="5" placeholder="ex : 4">
            </div>
            <!-- choix dateDeSortie -->
            <div class="form-group">
                <label for="dateSortie" class="margin1">date de sortie : </label>
                <input type="date" class="form-control" id="dateSortie" name="dateSortie" placeholder="ex : 03/06/1977">
            </div>
            <!-- choix distributeur -->
            <div class="form-group">
                <label for="distributeur" class="margin1">Distributeur : </label>
                <input type="text" class="form-control" id="distributeur" name="distributeur" placeholder="ex : 20 TH CENTURY FOX">
            </div>
            <!-- choix box office -->
            <div class="form-group">
                <label for="boxoffice" class="margin1">Box-Office : </label>
                <input type="number" class="form-control" id="boxoffice" name="boxoffice" placeholder="ex : 20 758 841 ">
            </div>
        </div>
        <!-- btn fermer le modal -->
        <div class="submit">
            <button class="js-modal-close">Fermer</button>
        </div>
    </div>    
</div>