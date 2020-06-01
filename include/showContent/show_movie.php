<?php
// combien de genre je veux sur une page
// je vais le stocker dans une variable afin de pouvoir m'adapter quelque soit le nb de genre total voulu sur la page
$nbCardPerPageV = 2;

try {
    // je récupère ici toutes les vidéo
    // la requete
    $sqlAllVideo = "SELECT * FROM `video`";
    // que j'envoie au serveur
    $requeteAllVideo = $bdd->query($sqlAllVideo);
    // avant de récupérer les résultats
    $allVideo = $requeteAllVideo->fetchAll(PDO::FETCH_OBJ);

    // je teste si l'utilisateur souhaite voir une page en particulié
    if (!empty($_GET['p'])) {
        $pV = $_GET['p'];
    } else {
        $pV = 1;
    }

    // je calcul ici le point de départ pour ma requete SQL future
    $offsetV = ($pV - 1) * $nbCardPerPageV;
    // Si l'offset est superieur aux nombres de genre, alors je met l'offset à 0 afin d'éviter la page blanche sans genre
    if ($offsetV > sizeof($allVideo)) {
        $offsetV = 0;
    }

    // je stocke ma requete dans une variable que je vais utiliser plus tard 
    $sqlVideo = "SELECT * FROM video ORDER BY video_titre ASC LIMIT " . $offsetV . "," . $nbCardPerPageV . ";";
    // j'envoie la requete au serveur et je stocke son retour dans une autre variable
    $requeteVideo = $bdd->query($sqlVideo);
    // dans la variable $Genre je vais stocker un tableau d'objet correspondant à ma requete
    $Video = $requeteVideo->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    // en cas d'erreur
    echo $e->getMessage();
}

?>
<div class="col-12">
  <?php
  // Je vais générer les boutons mais de combien en ai-je besoin ?
  // autant que de page or le nb de page = au nombre toal de nws divisé par le nombre de news qu'on veux sur une page le tout arrondi à l'unité supérieure
  $nbPageV = ceil(sizeof($allVideo) / $nbCardPerPageV);
  // J'ai le nombre max donc je fais une boucle pour les générer automatiquement la boucle for est tout indiquée puisqu'elle incrémente une variable ce qui m'interesse
  // je part de 1 (le 0 ne m'interesse pas ici je ne vaux pas l'afficher)
  for ($z = 1; $z <= $nbPageV; $z++) {
    # code...
    // Je génère donc un lien avec un numéro de page en variable dans l'url
  ?>
    <a href="global_critique.php?p=<?php echo $z; ?>#movies_content" class="btn btn-outline-secondary" role="button" aria-pressed="true"><?php echo $z; ?></a>
  <?php
  }
  ?>
<div id="movies_content">
    <?php
    foreach ($Video as $fullV) {
    ?>

        <!-- Affichage par défaut on requete SQL est à prévoir pour récupérer tous les films-->
        <div class="movie_content_inside">
            <div class="movieLeft">
                <img src="include/uploads_movie/<?php echo $fullV->video_image; ?>" alt="image Vidéo">
            </div>
            <div class="movieRight">
                <h3><?php echo $fullV->video_titre; ?></h3>
                <p><?php echo $fullV->video_synopsis; ?></p>
                <span>Réalisateur: <?php echo $fullV->video_realisateur; ?></span>
                <span>Acteurs Principaux : <?php echo $fullV->video_acteurPrincipal; ?></span>
                <a href="media_inside.php?video_id=<?php echo $fullV->video_id; ?>" class="btn btn-primary">Voir Plus</a>
            </div>
        </div>

    <?php
    }
    ?>
</div>