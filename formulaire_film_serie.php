<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/kit_UI.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/modal_user.css">
    <link rel="stylesheet" href="css/form_ajout_film.css">
    <title></title>
</head>


<body>


<?php include("include/modal.php"); ?>

    <header>

        <?php include("include/header_nav.php"); ?> 
        
    </header>

    <form action="" method="" class="form-film-serie">

        <a href="#modal1" class="js-modal a-modal">Ouvrir la boite modal</a>
        <aside id="modal1" class="modal" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none">
            <!-- definir le nom de mes modal -->
            <h3 id="premierFormulaire">1er partie du formulaire</h3>
            <div class="modal-wrapper js-modal-stop">
                <label for="nom">nom : </label>
                <input type="text" name="nom" id="nom"><br>
            </div>
            <button class="js-modal-close">Fermer la boite modal</button>
        </aside>

        <a href="#modal1" class="js-modal">Ouvrir la boite modal</a>
        <aside id="modal1" class="modal" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none">
            <!-- definir le nom de mes modal -->
            <h3 id="premierFormulaire">1er partie du formulaire</h3>
            <div class="modal-wrapper js-modal-stop">
                <label for="nom">nom : </label>
                <input type="text" name="nom" id="nom"><br>
            </div>
            <button class="js-modal-close">Fermer la boite modal</button>
        </aside>

        <a href="#modal1" class="js-modal">Ouvrir la boite modal</a>
        <aside id="modal1" class="modal" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="premierFormulaire" style="display: none">
            <!-- definir le nom de mes modal -->
            <h3 id="premierFormulaire">1er partie du formulaire</h3>
            <div class="modal-wrapper js-modal-stop">
                <label for="nom">nom : </label>
                <input type="text" name="nom" id="nom"><br>
            </div>
            <button class="js-modal-close">Fermer la boite modal</button>
        </aside>

        <input type="submit" name="submit" value="Envoyez">
    </form>


    <?php include("include/script_js.php"); ?>
</body>

</html>