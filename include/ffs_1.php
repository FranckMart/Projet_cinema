<a href="#modal1" class="js-modal a-modal">Ouvrir la boite modal</a>
<aside id="modal1" class="modal-content" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none">
    <div class="modal-wrapper js-modal-stop">
    <h3 class="h3">Première partie du formulaire</h3>

        <div class="wrapper-elements-ffs">
            <div class="form-group">
                <label for="titre" class="margin1">titre de la video : </label>
                <input type="text" class="form-control" id="titre" name="titre" placeholder="ex : ghost dog">
            </div>
            <div class="form-group">
                <label for="media" class="margin1">type de video : </label>
                <input type="text" class="form-control" id="media" name="media" placeholder="ex : film">
            </div>                 
        </div>

        <div class="wrapper-checkbox">
            <p class="titre-checkbox">Genre :</p>
            <div class="colonne">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="comedie" name="genre[]" value="comedie">
                    <label class="custom-control-label" for="comedie">Comédie</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="drame" name="genre[]" value="drame">
                    <label class="custom-control-label" for="drame">Drame</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="action" name="genre[]" value="action">
                    <label class="custom-control-label" for="action">Action</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="historique" name="genre[]" value="historique">
                    <label class="custom-control-label" for="historique">Historique</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="western" name="genre[]" value="western">
                    <label class="custom-control-label" for="western">Western</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="aventure" name="genre[]" value="aventure">
                    <label class="custom-control-label" for="aventure">Aventure</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="triller" name="genre[]" value="triller">
                    <label class="custom-control-label" for="triller">Triller</label>
                </div>
            </div>

            <div class="colonne2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="policier" name="genre[]" value="policier">
                    <label class="custom-control-label" for="policier">Policier</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="fantastique" name="genre[]" value="fantastique">
                    <label class="custom-control-label" for="fantastique">Fantastique</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="science" name="genre[]" value="science">
                    <label class="custom-control-label" for="science">Science-Fiction</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="horreur" name="genre[]" value="horreur">
                    <label class="custom-control-label" for="horreur">Horreur</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="documentaire" name="genre[]" value="documentaire">
                    <label class="custom-control-label" for="documentaire">Documentaire</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="filmDamour" name="genre[]" value="filmDamour">
                    <label class="custom-control-label" for="filmDamour">film-d'amour</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="comedieDramatique" name="genre[]" value="comedieDramatique">
                    <label class="custom-control-label" for="comedieDramatique">Comédie-Dramatique</label>
                </div>

            </div>

            </div>

            <div class="wrapper-elements-ffs-2">
            <p class="titre-checkbox">Couleur :</p>
                <div class="custom-control custom-radio custom-control-inline margin2">
                    <input type="radio" id="oui" name="couleur" value="oui" class="custom-control-input">
                    <label class="custom-control-label" for="oui">oui</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline margin2">
                    <input type="radio" id="non" name="couleur" value="non" class="custom-control-input">
                    <label class="custom-control-label" for="non">non</label>
                </div>
            </div>  

            <div class="submit">
                <button class="js-modal-close">Fermer</button>
            </div>
    </div>    
</aside>