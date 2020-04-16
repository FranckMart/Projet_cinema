<a href="#modal1" class="js-modal a-modal">Ouvrir la boite modal</a>
<aside id="modal1" class="modal-content" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: flex">
    <div class="modal-wrapper js-modal-stop">
    <h3 class="h3">1er partie du formulaire</h3>

    <div class="wrapper-elements-ffs">
        <div class="form-group">
            <label for="titre" class="margin1">titre de la video : </label>
            <input type="text" class="form-control" id="titre" placeholder="ex : ghost dog">
        </div>
        <div class="form-group">
            <label for="type" class="margin1">type de video : </label>
            <input type="text" class="form-control" id="type" placeholder="ex : film">
        </div>                 
    </div>

    <div class="wrapper-checkbox">
        <p class="titre-checkbox">Genre :</p>
        <div class="colonne">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="comedie" name="comedie">
                <label class="custom-control-label" for="comedie">Comédie</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="drame" name="drame">
                <label class="custom-control-label" for="drame">Drame</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="action" name="action">
                <label class="custom-control-label" for="action">Action</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="historique" name="historique">
                <label class="custom-control-label" for="historique">Historique</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="western" name="western">
                <label class="custom-control-label" for="western">Western</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="aventure" name="aventure">
                <label class="custom-control-label" for="aventure">Aventure</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="triller" name="triller">
                <label class="custom-control-label" for="triller">Triller</label>
            </div>
        </div>



        <div class="colonne2">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="policier" name="policier">
                <label class="custom-control-label" for="policier">Policier</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="fantastique" name="fantastique">
                <label class="custom-control-label" for="fantastique">Fantastique</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="science" name="science">
                <label class="custom-control-label" for="science">Science-Fiction</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="horreur" name="horreur">
                <label class="custom-control-label" for="horreur">Horreur</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="documentaire" name="documentaire">
                <label class="custom-control-label" for="documentaire">Documentaire</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="filmDamour" name="filmDamour">
                <label class="custom-control-label" for="filmDamour">film-d'amour</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="comedieDramatique" name="comedieDramatique">
                <label class="custom-control-label" for="comedieDramatique">Comédie-Dramatique</label>
            </div>

        </div>

    </div>

        <div class="wrapper-elements-ffs-2">
        <p class="titre-checkbox">Couleur :</p>
            <div class="custom-control custom-radio custom-control-inline margin2">
                <input type="radio" id="oui" name="oui" value="oui" class="custom-control-input">
                <label class="custom-control-label" for="oui">oui</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline margin2">
                <input type="radio" id="non" name="non" value="non" class="custom-control-input">
                <label class="custom-control-label" for="non">non</label>
            </div>
        </div>  
        <button class="js-modal-close">Fermer la boite modal</button>
</aside>