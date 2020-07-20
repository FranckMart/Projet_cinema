<a href="#modal3" class="js-modal a-modal flex center">Ouvrir la boite modal</a>
<div id="modal3" class="modal-content center" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="modal3" style="display: none">
    <div class="modal-wrapper js-modal-stop flex">
        <h3 class="h3">Troisième partie du formulaire</h3>

        <!-- synopsis -->
        <div class="wrapper-mid-ffs3">
            <div class="form-group">
                <label for="synopsis" class="margin1">Synopsis :  <span>*</span></label>
                <input type="text" class="form-control margin3" id="synopsis" name="synopsis" placeholder="un résumé du film">
            </div>
        </div>
        <div class="wrapper-mid-ffs3">
            <label for="movie_image">Insérer une image : <span>*</span></label>
            <input type="file" id="movie_image" name="movie_image">
        </div>

        
         <div class="form-group">
                <label for="trailer" class="margin1">Vous pouvez rajouter ici une bande annonce en rapport avec le film :  <span>*</span></label>
                <input type="text" class="form-control margin3" id="trailer" name="trailer" placeholder="rajouter la bande annonce">
            </div> 

        <!-- btn fermer le modal -->
        <div class="submit">
            <button class="js-modal-close">Fermer</button>
        </div>
    </div>
</div>