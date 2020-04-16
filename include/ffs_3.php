<a href="#modal3" class="js-modal a-modal">Ouvrir la boite modal</a>
<aside id="modal3" class="modal-content" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none">
    <div class="modal-wrapper js-modal-stop">
        <h3 class="h3">Troisième partie du formulaire</h3>

        <div class="wrapper-mid-ffs3"> 
        <div class="form-group">
                <label for="synopsis" class="margin1">Synopsis : </label>
                <input type="text" class="form-control margin3" id="synopsis" name="synopsis" placeholder="un résumé du film">
            </div>
        </div>

        <div class="wrapper-mid-ffs3"> 
            <div class="form-group">
                <label for="photo" class="margin1">Vous pouvez rajouter ici des photos en rapport avec le film : </label>
                <input type="file" class="form-control margin3" id="photo" name="photo" multiple placeholder="rajouter des photos">
            </div>

            <div class="form-group">
                <label for="bandeAnnonce" class="margin1">Vous pouvez rajouter ici une bande annonce en rapport avec le film : </label>
                <input type="url" class="form-control margin3" id="bandeAnnonce" name="bandeAnnonce" multiple placeholder="rajouter la bande annonce">
            </div>
        </div>

    <div class="submit">
        <button class="js-modal-close">Fermer</button>
    </div>
</aside>

<input class="btn-form-film-serie" type="submit" name="submit" value="Envoyez">