<?php
    require "include/header.php";
    require "include/navbar.php";
?>    


    <form action="" method="" class="form-film-serie">

        <a href="#modal1" class="js-modal a-modal">Ouvrir la boite modal</a>
        <aside id="modal1" class="modal" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none"> <!-- definir le nom de mes modal --> 
            <h3 id="premierFormulaire">1er partie du formulaire</h3>
            <div class="modal-wrapper js-modal-stop">
               <label for="nom">nom : </label>
               <input type="text" name="nom" id="nom"><br>
            </div>
            <button class="js-modal-close">Fermer la boite modal</button>
        </aside>

        <a href="#modal1" class="js-modal a-modal">Ouvrir la boite modal</a>
        <aside id="modal1" class="modal" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none"> <!-- definir le nom de mes modal --> 
            <h3 id="premierFormulaire">1er partie du formulaire</h3>
            <div class="modal-wrapper js-modal-stop">
               <label for="nom">nom : </label>
               <input type="text" name="nom" id="nom"><br>
            </div>
            <button class="js-modal-close">Fermer la boite modal</button>
        </aside>

        <a href="#modal1" class="js-modal a-modal">Ouvrir la boite modal</a>
        <aside id="modal1" class="modal" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none"> <!-- definir le nom de mes modal --> 
            <h3 id="premierFormulaire">1er partie du formulaire</h3>
            <div class="modal-wrapper js-modal-stop">
               <label for="nom">nom : </label>
               <input type="text" name="nom" id="nom"><br>
            </div>
            <button class="js-modal-close">Fermer la boite modal</button>
        </aside>
 
        <input type="submit" name="submit" value="Envoyez">
    </form>

    <script src="js/modal_form.js"></script>
</body>
</html>