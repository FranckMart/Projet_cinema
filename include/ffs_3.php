<!-- ma balise a va servir a ouvrir le modal en cliquant dessus -->
<a href="#modal1" class="js-modal a-modal">Ouvrir la boite modal</a>

<!-- mon aside est sera mon modal -->
<aside id="modal1" class="modal-content" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none">
          
<!-- le titre de la première partie de mon formulaire -->
<h3>Troisième partie du formulaire</h3>

    <!-- l'intérieur de mon modal et ce qu'il va contenir -->
    <div class="modal-wrapper js-modal-stop">
        <!-- mon formulaire -->
            <label for="nom">nom : </label>
            <input type="text" name="nom" id="nom"><br>
        </div>

    <!-- mon bouton de fermeture du modal -->
    <button class="js-modal-close">Fermer la boite modal</button>
</aside>

<input class="btn-form-film-serie" type="submit" name="submit" value="Envoyez">