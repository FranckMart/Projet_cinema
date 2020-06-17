<!-- lien vers le modal -->
<a href="#modal2" class="js-modal a-modal flex center">Ouvrir la boite modal</a>
<!-- modalJs en display none -->
<div id="modal2" class="modal-content center" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none ">
    <div class="modal-wrapper js-modal-stop flex">
        <h3 class="h3">Deuxième partie du formulaire</h3>

        <div class="wrapP">
            <div class="form-group">
                <label for="realisateur" class="margin1">Réalisateur : <span>*</span></label>
                <input type="text" class="form-control" id="realisateur_nom" name="realisateur" placeholder="Nom :Akira Kurosawa">
            </div>

            <div class="form-group">
                <label for="acteurPrincipal" class="margin1">Acteurs Principaux : <span>*</span></label>
                <input type="text" class="form-control" id="acteurPrincipal" name="acteurPrincipal" placeholder="Nom : Will Smith">
            </div>
        </div>

        <div class="wrapC">
            <div class="form-group">
                <label for="casting" class="margin1">Acteur secondaires: </label>
                <input type="text" class="form-control margin3" id="casting" name="casting[]" placeholder="Nom : Brad Pitt">
            </div>
<!--
            <div class="form-group">
                <label for="casting" class="margin1">casting : </label>
                <input type="text" class="form-control margin3" id="casting" name="casting[]" placeholder="Nom : Brad Pitt">
            </div>

            <div class="form-group">
                <label for="casting" class="margin1">casting : </label>
                <input type="text" class="form-control margin3" id="casting" name="casting[]" placeholder="Nom : Brad Pitt">
            </div>
-->
        </div>

        <div class="wrapI1">
            <div class="form-group">

                <label for="duree" class="margin1">Durée :  <span>*</span></label>
                <input type="text" class="form-control" id="duree" name="duree" placeholder="ex : 1h 30min">
            </div>

            <div class="form-group">
                <label for="origine" class="margin1">Origine :  <span>*</span></label>
                <input type="text" class="form-control" id="origine" name="origine" placeholder="ex : France">

            </div>

            <div class="form-group">
                <label for="note" class="margin1">Note :  <span>*</span></label>
                <input type="number" class="form-control" id="note" name="note" min="0" max="5" placeholder="ex : 4">
            </div>


            <div class="form-group">
                <label for="dateSortie" class="margin1">Date de sortie :  <span>*</span></label>
                <input type="date" class="form-control" id="dateSortie" name="dateSortie" placeholder="ex : 03/06/1977">
            </div>
        </div>

        <div class="wrapI2">

            <div class="form-group">
                <label for="distributeur" class="margin1">Distributeur : </label>
                <input type="text" class="form-control" id="distributeur" name="distributeur" placeholder="ex : 20 TH CENTURY FOX">
            </div>


            <div class="form-group">
                <label for="boxOffice" class="margin1">Box-Office : </label>
                <input type="number" class="form-control" id="boxOffice" name="boxOffice" placeholder="ex : 20 758 841 ">
            </div>
        </div>

        <!-- btn fermer le modal -->
        <div class="submit">
            <button class="js-modal-close">Fermer</button>
        </div>
    </div>
</div>