<?php
// combien de genre je veux sur une page
// je vais le stocker dans une variable afin de pouvoir m'adapter quelque soit le nb de genre total voulu sur la page
$nbCardPerPageV = 2;


try {
    if (isset($_GET['choice']) && $_GET['choice'] == "Film") {
        // je récupère ici toutes les vidéo
        // la requete
        $sqlAllFilm = "SELECT * FROM video WHERE video_media = 'Film'";
        // que j'envoie au serveur
        $requeteAllFilm = $bdd->query($sqlAllFilm);
        // avant de récupérer les résultats
        $allFilm = $requeteAllFilm->fetchAll(PDO::FETCH_OBJ);

        // je teste si l'utilisateur souhaite voir une page en particulié
        if (!empty($_GET['p'])) {
            $pV = $_GET['p'];
        } else {
            $pV = 1;
        }

        // je calcul ici le point de départ pour ma requete SQL future
        $offsetV = ($pV - 1) * $nbCardPerPageV;
        // Si l'offset est superieur aux nombres de genre, alors je met l'offset à 0 afin d'éviter la page blanche sans genre
        if ($offsetV > sizeof($allFilm)) {
            $offsetV = 0;
        }

        // je stocke ma requete dans une variable que je vais utiliser plus tard 
        $sqlFilm = "SELECT * FROM video WHERE video_media = 'Film' ORDER BY video_titre ASC LIMIT " . $offsetV . "," . $nbCardPerPageV . ";";
        // j'envoie la requete au serveur et je stocke son retour dans une autre variable
        $requeteFilm = $bdd->query($sqlFilm);
        // dans la variable $Genre je vais stocker un tableau d'objet correspondant à ma requete
        $Film = $requeteFilm->fetchAll(PDO::FETCH_OBJ);
    }
    if (isset($_GET['choice']) && ($_GET['choice'] == "Série")) {
        // je récupère ici toutes les vidéo
        // la requete
        $sqlAllSerie = "SELECT * FROM video WHERE video_media = 'Série'";
        // que j'envoie au serveur
        $requeteAllSerie = $bdd->query($sqlAllSerie);
        // avant de récupérer les résultats
        $allSerie = $requeteAllSerie->fetchAll(PDO::FETCH_OBJ);

        // je teste si l'utilisateur souhaite voir une page en particulié
        if (!empty($_GET['p'])) {
            $pV = $_GET['p'];
        } else {
            $pV = 1;
        }

        // je calcul ici le point de départ pour ma requete SQL future
        $offsetV = ($pV - 1) * $nbCardPerPageV;
        // Si l'offset est superieur aux nombres de genre, alors je met l'offset à 0 afin d'éviter la page blanche sans genre
        if ($offsetV > sizeof($allSerie)) {
            $offsetV = 0;
        }
        $sqlSerie = "SELECT * FROM video WHERE video_media = 'Série' ORDER BY video_titre ASC LIMIT " . $offsetV . "," . $nbCardPerPageV . ";";
        // j'envoie la requete au serveur et je stocke son retour dans une autre variable
        $requeteSerie = $bdd->query($sqlSerie);
        // dans la variable $Genre je vais stocker un tableau d'objet correspondant à ma requete
        $Serie = $requeteSerie->fetchAll(PDO::FETCH_OBJ);
    }
} catch (PDOException $e) {
    // en cas d'erreur
    echo $e->getMessage();
}

?>
<div class="col-12">

    <?php
    if (isset($_GET['choice']) && ($_GET['choice'] == "Film" || $_GET['choice'] == "film")) {
        // Je vais générer les boutons mais de combien en ai-je besoin ?
        // autant que de page or le nb de page = au nombre toal de news divisé par le nombre de news qu'on veux sur une page le tout arrondi à l'unité supérieure
        $nbPageV = ceil(sizeof($allFilm) / $nbCardPerPageV);
        // J'ai le nombre max donc je fais une boucle pour les générer automatiquement la boucle for est tout indiquée puisqu'elle incrémente une variable ce qui m'interesse
        // je part de 1 (le 0 ne m'interesse pas ici je ne vaux pas l'afficher)
        for ($z = 1; $z <= $nbPageV; $z++) {
            # code...
            // Je génère donc un lien avec un numéro de page en variable dans l'url

    ?>
            <a href="global_critique.php?choice=<?php echo "Film&amp;" ?>p=<?php echo $z; ?>#movies_content" class="btn btn-outline-secondary" role="button" aria-pressed="true"><?php echo $z; ?></a>
        <?php

        }
    }
    if (isset($_GET['choice']) && $_GET['choice'] == "Série") {
        // Je vais générer les boutons mais de combien en ai-je besoin ?
        // autant que de page or le nb de page = au nombre toal de nws divisé par le nombre de news qu'on veux sur une page le tout arrondi à l'unité supérieure
        $nbPageV = ceil(sizeof($allSerie) / $nbCardPerPageV);
        // J'ai le nombre max donc je fais une boucle pour les générer automatiquement la boucle for est tout indiquée puisqu'elle incrémente une variable ce qui m'interesse
        // je part de 1 (le 0 ne m'interesse pas ici je ne vaux pas l'afficher)
        for ($z = 1; $z <= $nbPageV; $z++) {
            # code...
            // Je génère donc un lien avec un numéro de page en variable dans l'url

        ?>
            <a href="global_critique.php?choice=<?php echo "Série&amp;" ?>p=<?php echo $z; ?>#movies_content" class="btn btn-outline-secondary" role="button" aria-pressed="true"><?php echo $z; ?></a>
    <?php
        }
    }
    ?>
    <div id="movies_content">
        <?php
        if (isset($_GET['choice']) && ($_GET['choice'] == "Film")) {
            foreach ($Film as $fullFilm) {
        ?>


                <!-- Affichage par défaut on requete SQL est à prévoir pour récupérer tous les films-->
                <div class="movie_content_inside">
                    <div class="movieLeft">
                        <img src="include/uploads_movie/<?php echo $fullFilm->video_image; ?>" alt="image Vidéo">
                    </div>
                    <div class="movieRight">
                        <h3><?php echo $fullFilm->video_titre; ?></h3>
                        <p><?php echo $fullFilm->video_synopsis; ?></p>
                        <span>Réalisateur: <?php echo $fullFilm->video_realisateur; ?></span>
                        <span>Acteur Principal : <?php echo $fullFilm->video_acteurPrincipal; ?></span>
                        <a href="media_inside.php?video_id=<?php echo $fullFilm->video_id; ?>" class="btn btn-primary btn_video">Voir Plus</a>
                    </div>
                    <?php
                    if (!empty($_SESSION) && $_SESSION['user']->user_droit == 1) {
                    ?>
                        <div class="content_delete_video">
                            <a href="include/deleteContent.php?video_id=<?php echo $fullFilm->video_id;; ?>" class="btn_suppression">Supprimer</a>
                        </div>
                    <?php
                    } else {
                    ?>
                        <a href="include/deleteContent.php?news_id=<?php echo $fullFilm->video_id;; ?>" class="btn_suppresion" style="display: none;">Supprimer</a>
                    <?php
                    }

                    ?>
                </div>

            <?php
            }
        }
        if (isset($_GET['choice']) && ($_GET['choice'] == "Série")) {
            foreach ($Serie as $fullSerie) {
            ?>


                <!-- Affichage par défaut on requete SQL est à prévoir pour récupérer tous les films-->
                <div class="movie_content_inside">
                    <div class="movieLeft">
                        <img src="include/uploads_movie/<?php echo $fullSerie->video_image; ?>" alt="image Vidéo">
                    </div>
                    <div class="movieRight">
                        <h3><?php echo $fullSerie->video_titre; ?></h3>
                        <p><?php echo $fullSerie->video_synopsis; ?></p>
                        <span>Réalisateur: <?php echo $fullSerie->video_realisateur; ?></span>
                        <span>Acteur Principal : <?php echo $fullSerie->video_acteurPrincipal; ?></span>
                        <a href="media_inside.php?video_id=<?php echo $fullSerie->video_id; ?>" class="btn btn-primary btn_video">Voir Plus</a>
                    </div>
                    <?php
                    if (!empty($_SESSION) && $_SESSION['user']->user_droit == 1) {
                    ?>
                        <div class="content_delete_video">
                            <a href="include/deleteContent.php?video_id=<?php echo $fullSerie->video_id; ?>" class="btn_suppression">Supprimer</a>
                        </div>
                    <?php
                    } else {
                    ?>
                        <a href="include/deleteContent.php?video_id=<?php echo $fullSerie->video_id; ?>" class="btn_suppression" style="display: none;">Supprimer</a>
                    <?php
                    }

                    ?>
                </div>

        <?php
            }
        }
        ?>
    </div>