<a href="#modal1" class="js-modal a-modal flex center">Ouvrir la boite modal</a>
<aside id="modal1" class="modal-content center" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none">
    <div class="modal-wrapper js-modal-stop flex">
        <h3 class="h3 flex center
    ">Première partie du formulaire</h3>

        <div class="wrapper-elements-ffs">
            <div class="form-group">
                <label for="titre" class="margin1">Titre de la video : <span>*</span></label>
                <input type="text" class="form-control" id="titre" name="titre" placeholder="ex : ghost dog">
            </div>
            <div class="form-group">
                <label for="media" class="margin1">Type de video : <span>*</span></label>
                <!--<input type="text" class="form-control" id="media" name="media" placeholder="ex : film">-->
                <select name="media" id="media">
                    <option value=""> Veuillez séléctionner un media </option>
                    <option value="Film">Film</option>
                    <option value="Serie">Série</option>
                </select>
            </div>
        </div>

        <div class="wrapper-checkbox flex">
            <p class="titre-checkbox">Genre :<span>*</span></p>
            <div class="colonne">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="comedie" name="genre[]" value="Comedie">
                    <label class="custom-control-label" for="comedie">Comédie</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="drame" name="genre[]" value="Drame">
                    <label class="custom-control-label" for="drame">Drame</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="action" name="genre[]" value="Action">
                    <label class="custom-control-label" for="action">Action</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="historique" name="genre[]" value="Historique">
                    <label class="custom-control-label" for="historique">Historique</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="western" name="genre[]" value="Western">
                    <label class="custom-control-label" for="western">Western</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="aventure" name="genre[]" value="Aventure">
                    <label class="custom-control-label" for="aventure">Aventure</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="thriller" name="genre[]" value="thriller">
                    <label class="custom-control-label" for="thriller">Thriller</label>
                </div>
            </div>

            <div class="colonne2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="policier" name="genre[]" value="Policier">
                    <label class="custom-control-label" for="policier">Policier</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="fantastique" name="genre[]" value="Fantastique">
                    <label class="custom-control-label" for="fantastique">Fantastique</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="science" name="genre[]" value="Science-Fiction">
                    <label class="custom-control-label" for="science">Science-Fiction</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="horreur" name="genre[]" value="Horreur">
                    <label class="custom-control-label" for="horreur">Horreur</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="documentaire" name="genre[]" value="Documentaire">
                    <label class="custom-control-label" for="documentaire">Documentaire</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="Romance" name="genre[]" value="Romance">
                    <label class="custom-control-label" for="Romance">Romance</label>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="comedieDramatique" name="genre[]" value="Comedie-Dramatique">
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