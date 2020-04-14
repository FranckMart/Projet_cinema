<?php
    require "include/header.php";
    require "include/navbar.php";
?>    


    <form action="" method="" class="form-film-serie">

        <a href="#modal1" class="js-modal a-modal">Ouvrir la boite modal <br> Pour remplire la première partie</a>
        <aside id="modal1" class="modal" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none"> <!-- definir le nom de mes modal --> 
            <h3 id="premierFormulaire" class="titre-form-film-serie">Premier partie du formulaire</h3>
            <div class="modal-wrapper js-modal-stop">
               <label for="nom">nom : </label>
               <input type="text" name="nom" id="nom"><br>
            </div>
            <button class="js-modal-close">Fermer la boite modal</button>
        </aside>

        <a href="#modal1" class="js-modal a-modal">Ouvrir la boite modal <br> Pour remplire la deuxième partie</a>
        <aside id="modal1" class="modal" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none"> <!-- definir le nom de mes modal --> 
            <h3 id="premierFormulaire" class="titre-form-film-serie">Deuxième partie du formulaire</h3>
            <div class="modal-wrapper js-modal-stop">
               <label for="nom">nom : </label>
               <input type="text" name="nom" id="nom"><br>
            </div>
            <button class="js-modal-close">Fermer la boite modal</button>
        </aside>

        <a href="#modal1" class="js-modal a-modal">Ouvrir la boite modal <br> Pour remplire la troisième partie</a>
        <aside id="modal1" class="modal" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none"> <!-- definir le nom de mes modal --> 
            <h3 id="premierFormulaire" class="titre-form-film-serie">Troisième partie du formulaire</h3>
            <div class="modal-wrapper js-modal-stop">
               <label for="nom">nom : </label>
               <input type="text" name="nom" id="nom"><br>
            </div>
            <button class="js-modal-close">Fermer la boite modal</button>
        </aside>
 
        <input type="submit" name="submit" value="Une fois le formulaire fini, vous pouvez le valider en cliquant ici">
    </form>


</body>
</html>