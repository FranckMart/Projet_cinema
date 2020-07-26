<?php
require_once('include/bddConfig/bdd.php');

// combien de genre je veux sur une page
// je vais le stocker dans une variable afin de pouvoir m'adapter quelque soit le nb de genre total voulu sur la page
$nbCardPerPage = 5;

try {
    // je récupère ici tous les genres 
    // la requete
    $sqlAllGenre = "SELECT * FROM `genre`";
    // que j'envoie au serveur
    $requeteAllGenre = $GLOBALS['bdd']->query($sqlAllGenre);
    // avant de récupérer les résultats
    $allGenre = $requeteAllGenre->fetchAll(PDO::FETCH_OBJ);

    // je teste si l'utilisateur souhaite voir une page en particulié
    if (!empty($_GET['p'])) {
        $p = $_GET['p'];
    } else {
        $p = 1;
    }

    // je calcul ici le point de départ pour ma requete SQL future
    $offset = ($p - 1) * $nbCardPerPage;
    // Si l'offset est superieur aux nombres de genre, alors je met l'offset à 0 afin d'éviter la page blanche sans genre
    if ($offset > sizeof($allGenre)) {
        $offset = 0;
    }

    // je stocke ma requete dans une variable que je vais utiliser plus tard 
    $sqlGenre = "SELECT genre_id,genre_nom FROM genre ORDER BY genre_nom ASC LIMIT " . $offset . "," . $nbCardPerPage . ";";
    // j'envoie la requete au serveur et je stocke son retour dans une autre variable
    $requeteGenre = $bdd->query($sqlGenre);
    // dans la variable $Genre je vais stocker un tableau d'objet correspondant à ma requete
    $Genre = $requeteGenre->fetchAll(PDO::FETCH_OBJ);


?>

    <?php
    ?>
    <div id="choice_content">
        <div id="movie_choice_content">
            <div class="movie_choice_textarea">
                <a href="global_critique.php?choice=<?php echo "Film"; ?>#movies_content">
                    <h2>Film</h2>
                </a>
                <div class="arrow_content">
                    <a href="global_critique.php?choice=<?php echo "Film"; ?>#movies_content">
                        <svg class="arrows">
                            <path class="a1" d="M0 0 L30 32 L60 0"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div id="serie_choice_content">
            <div class="serie_choice_textarea">
                <a href="global_critique.php?choice=<?php echo "Série"; ?>#movies_content">
                    <h2>Série</h2>
                </a>
                <div class="arrow_content">
                    <a href="global_critique.php?choice=<?php echo "Série"; ?>#movies_content">
                        <svg class="arrows">
                            <path class="a1" d="M0 0 L30 32 L60 0"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="title-intro-critique">
        <a href="#choice_content">
            <h2>Veuillez choisir un type de média </h2>
        </a>
        <p>
            En haut de la page
        </p>
    </div>
    <article id="global_content_center">
        <nav id="content-nav-genre">
            <div class="col-12">
                <?php
                // Je vais générer les boutons mais de combien en ai-je besoin ?
                // autant que de page or le nb de page = au nombre total de genre divisé par le nombre de genre qu'on veux sur une page le tout arrondi à l'unité supérieure
                $nbPage = ceil(sizeof($allGenre) / $nbCardPerPage);
                // J'ai le nombre max donc je fais une boucle pour les générer automatiquement la boucle for est tout indiquée puisqu'elle incrémente une variable ce qui m'interesse
                // je part de 1 (le 0 ne m'interesse pas ici je ne vaux pas l'afficher)
                for ($i = 1; $i <= $nbPage; $i++) {
                    # code...
                    // Je génère donc un lien avec un numéro de page en variable dans l'url
                ?>
                    <a href="global_critique.php?p=<?php echo $i; ?>#genre_content" class="btn btn-outline-secondary btn_paginationCategorie" role="button" aria-pressed="true"><?php echo $i; ?></a>
                <?php
                }
                ?>
            </div>
            <div id="genre_content">
                <?php

                // maintenant j'affiche les genres que je veux avec les limit 
                foreach ($Genre as $genre) {
                    # code...
                    // pour récupérer les genre j'ai opté pour PDO::FETCH_OBJ donc je vais avoir un objet dans $genre d'où les -> pour appeler les champs de la table
                ?>
                    <div class="genre">
                        <?php if(!isset($_GET['choice'])){
                            ?>
                    <a href="global_critique.php?choice=<?php echo "Film&amp;" ?>genre=<?php echo $genre->genre_id ?>"><?php echo $genre->genre_nom ?></a>
                    </div>
                    <?php
                        }
                        ?>
                        <?php
                    if (isset($_GET['choice']) && ($_GET['choice'] == "Film")) {

                        ?>
                        <a href="global_critique.php?choice=<?php echo "Film&amp;" ?>genre=<?php echo $genre->genre_id ?>"><?php echo $genre->genre_nom ?></a>
                    </div>

            <?php

                }
                if (isset($_GET['choice']) && ($_GET['choice'] == "Série")) {

                    ?>
                    <a href="global_critique.php?choice=<?php echo "Série&amp;" ?>genre=<?php echo $genre->genre_id ?>"><?php echo $genre->genre_nom ?></a>
                </div>

        <?php

            }
            }
            } catch (PDOException $e) {
                // en cas d'erreur
                echo $e->getMessage();
            }

            ?>
            </div>
            <div class="add_mediaContent">
                <a href="formFilmSerie.php"><button type="button" class="btn btn-primary btn_addMedia" data-toggle="modal" data-target="#news_modal">
                        Ajouter un Film/série
                    </button>
                </a>
            </div>
        </nav>


        <div id="selection_content">
            <div class="content_selection_trie">
                <label for="selection_film">Sélectionné par :</label>
                <select name="selection" id="selection_film">
                    <!--<option value="">--Please choose an option--</option>-->
                    <option value="popularité">Popularité</option>
                    <option value="date_sortie">Date de sortie</option>
                    <option value="note">Note</option>
                </select>
            </div>
        </div>
        <!-- Affichage par défaut on requete SQL est à prévoir pour récupérer tous les films-->
        <?php include("include/showContent/show_movie.php") ?>
    </article>