<?php
require_once("include/bdd.php");

// combien d'apprenants je veux sur une page
// je vais le stocker das une variable afin de pouvoir m'adapter quelque soit le nb d'apprenants par promotion, le nb d'apprenants totals et de fait le nb d'apprenants à afficher
$nbCardPerPage = 5;

// je récupère ici tous les apprenants de la promotion
// la requete
$sqlAllGenre = "SELECT * FROM `genre`";
// que j'envoie au serveur
$requeteAllGenre = $bdd->query($sqlAllGenre);
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
// Si l'offset est superieur aux nombres d'apprenants, alors je met l'offset à 0 afin d'éviter la page blanche sans apprenant
if ($offset > sizeof($allGenre)) {
    $offset = 0;
}

// je stocke ma requete dans une variable que je vais utiliser plus tard 
//$sqlApprenants = "SELECT * FROM `stagiaire` AS s JOIN `utilisateur` AS u ON (s.`stagiaire_utilisateur_id` = u.`utilisateur_id`) WHERE s.`stagiaire_formation_id` = 1 ORDER BY s.`stagiaire_prenom` ASC LIMIT ".$offset.",".$nbCardPerPage.";";
$sqlGenre = "SELECT genre_id,genre_nom FROM genre ORDER BY genre_nom ASC LIMIT " . $offset . "," . $nbCardPerPage . ";";
// j'envoie la requete au serveur et je stocke son retour dans une autre variable
$requeteGenre = $bdd->query($sqlGenre);
// dans la variable $apprenants je vais stocker un tableau d'objet correspondant à ma requete
$Genre = $requeteGenre->fetchAll(PDO::FETCH_OBJ);

// $apprenants avec un s contient la totalité des résultats tandis que $apprenant sans s, lui ne contient qu'un seul résultat, une seule ligne de la bdd 
?>

<?php
?>
<div id="choice_content">
    <div id="movie_choice_content">
        <div class="movie_choice_textarea">
            <a href="#">
                <h2>Film</h2>
            </a>
            <div class="arrow_content">
                <a href="#title-intro-critique">
                    <svg class="arrows">
                        <path class="a1" d="M0 0 L30 32 L60 0"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div id="serie_choice_content">
        <div class="serie_choice_textarea">
            <a href="#">
                <h2>Série</h2>
            </a>
            <div class="arrow_content">
                <a href="#title-intro-critique">
                    <svg class="arrows">
                        <path class="a1" d="M0 0 L30 32 L60 0"></path>
                    </svg>
                </a>
            </div>
            </a>
        </div>
    </div>
</div>
<div id="title-intro-critique">
    <a href="#choice_content"><h2>Veuillez choisir le type de vidéo</h2></a>
    
    </p>
</div>
<nav id="content-nav-genre">
    <div class="col-12">
        <?php
        // Je vais générer les boutons mais de combien en ai-je besoin ?
        // autant que de page or le nb de page = au nombre toal d'apprenants divisé par le nombre d'apprenants qu'on veux sur une page le tout arrondi à l'unité supérieure
        $nbPage = ceil(sizeof($allGenre) / $nbCardPerPage);
        // J'ai le nombre max donc je fais une boucle pour les générer automatiquement la boucle for est tout indiquée puisqu'elle incrémente une variable ce qui m'interesse
        // je part de 1 (le 0 ne m'interesse pas ici je ne vaux pas l'afficher)
        for ($i = 1; $i <= $nbPage; $i++) {
            # code...
            // Je génère donc un lien avec un numéro de page en variable dans l'url
        ?>
            <a href="global_critique.php?p=<?php echo $i; ?>#title-intro-critique" class="btn btn-outline-secondary" role="button" aria-pressed="true"><?php echo $i; ?></a>
        <?php
        }
        ?>
    </div>
    <div id="genre_content">
        <?php

        // maintenant j'affiche les apprenants que je veux avec les limit 
        foreach ($Genre as $genre) {
            # code...
            // pour récupérer les apprenants j'ai opté pour PDO::FETCH_OBJ donc je vais avoir un objet dans $apprenant d'où les -> pour appeler les champs de la table
        ?>
            <div class="genre">
                <a href="#<?php echo $genre->genre_nom ?>"><?php echo $genre->genre_nom ?></a>
            </div>

        <?php
        }

        ?>
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
<div id="movies_content">
    <div class="movieLeft">
        <img src="IMG_Movie/LeParrain.jpg" alt="image le parrain">
    </div>
    <div class="movieRight">
        <h3>Le parrain</h3>
        <p>En 1945, à New York, les Corleone sont une des cinq familles de la mafia.
            Don Vito Corleone, "parrain" de cette famille, marie sa fille à un bookmaker. Sollozzo, " parrain " de la famille Tattaglia,
            propose à Don Vito une association dans le trafic de drogue, mais celui-ci refuse. Sonny, un de ses fils, y est quant à lui favorable.
            Afin de traiter avec Sonny, Sollozzo tente de faire tuer Don Vito, mais celui-ci en réchappe. Michael, le frère cadet de Sonny, recherche alors les commanditaires de l'attentat
            et tue Sollozzo et le chef de la police, en représailles.
            Michael part alors en Sicile, où il épouse Apollonia, mais celle-ci est assassinée à sa place. De retour à New York, Michael épouse Kay Adams
            et se prépare à devenir le successeur de son père... </p>
            <span>Réalisateur:  Francis Ford Coppola</span>
            <span>Acteurs Principaux : Al Pacino - Robert De Niro - Marlon Brando</span>
            <a href="#">Voir Plus</a>
    </div>
</div>