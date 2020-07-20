<?php
require_once("include/bddConfig/bdd.php");

try {
    // je récupère ici tous les genres 
    // la requete
    $sqlAllGenre = "SELECT * FROM `genre`";
    // que j'envoie au serveur
    $requeteAllGenre = $bdd->query($sqlAllGenre);
    // avant de récupérer les résultats
    $allGenre = $requeteAllGenre->fetchAll(PDO::FETCH_OBJ);

    // je stocke ma requete dans une variable que je vais utiliser plus tard 
    $sqlGenre = "SELECT genre_id,genre_nom FROM genre ORDER BY genre_nom";
    // j'envoie la requete au serveur et je stocke son retour dans une autre variable
    $requeteGenre = $bdd->query($sqlGenre);
    // dans la variable $Genre je vais stocker un tableau d'objet correspondant à ma requete
    $Genre = $requeteGenre->fetchAll(PDO::FETCH_OBJ);


?>

    <a href="#modal1" class="js-modal a-modal flex center">Ouvrir la boite modal</a>
    <div id="modal1" class="modal-content center" aria-hidden="true" role="dialog" aria-modal="false" aria-labelledby="modal1" style="display: none">
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

                    <?php

                    // maintenant j'affiche les genres que je veux avec les limit 
                    foreach ($Genre as $genre) {
                        # code...
                        // pour récupérer les genre j'ai opté pour PDO::FETCH_OBJ donc je vais avoir un objet dans $genre d'où les -> pour appeler les champs de la table
                    ?>
                    
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="<?php echo $genre->genre_nom ?>" name="genre[]" value="<?php echo $genre->genre_nom ?>">
                            <label class="custom-control-label" for="<?php echo $genre->genre_nom ?>"><?php echo $genre->genre_nom ?></label>
                        </div>

                <?php

                    }
                } catch (PDOException $e) {
                    // en cas d'erreur
                    echo $e->getMessage();
                }
                ?>
     
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
            </div>