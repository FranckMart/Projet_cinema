    <div>
        <h3 class="h3">Troisième partie du formulaire</h3>

        <div> 
        <div>
                <label for="synopsis">Synopsis : </label>
                <input type="text" class="form-control margin3" id="synopsis" name="synopsis" placeholder="un résumé du film">
            </div>
        </div>

        <div> 
            <div>
                <label for="photo">Vous pouvez rajouter ici des photos en rapport avec le film : </label>
                <input type="file" class="form-control margin3" id="photo" name="photo" multiple placeholder="rajouter des photos">
            </div>

            <div>
                <label for="bandeAnnonce">Vous pouvez rajouter ici une bande annonce en rapport avec le film : </label>
                <input type="url" id="bandeAnnonce" name="bandeAnnonce" multiple placeholder="rajouter la bande annonce">
            </div>
        </div>

<input type="submit" name="submit" value="Envoyez">