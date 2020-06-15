<?php
require_once("include/bddConfig/bdd.php");

// combien de news je veux sur une page
// je vais le stocker das une variable afin de pouvoir m'adapter quelque soit le nb de news 
$nbCardPerPage = 2;

// je récupère ici toutes les news 
// la requete
$sqlAllNews = "SELECT * FROM `news`";
// que j'envoie au serveur
$requeteAllNews = $bdd->query($sqlAllNews);
// avant de récupérer les résultats
$allNews = $requeteAllNews->fetchAll(PDO::FETCH_OBJ);

// je teste si l'utilisateur souhaite voir une page en particulié
if (!empty($_GET['p'])) {
  $p = $_GET['p'];
} else {
  $p = 1;
}

// je calcul ici le point de départ pour ma requete SQL future
$offset = ($p - 1) * $nbCardPerPage;
// Si l'offset est superieur aux nombres de news, alors je met l'offset à 0 afin d'éviter la page blanche sans news
if ($offset > sizeof($allNews)) {
  $offset = 0;
}

// je stocke ma requete dans une variable que je vais utiliser plus tard 
$sqlNews = "SELECT news_id, news_image, news_titrePresentation, news_micro, news_editeur, news_date FROM news ORDER BY news_date DESC LIMIT " . $offset . "," . $nbCardPerPage . ";";
// j'envoie la requete au serveur et je stocke son retour dans une autre variable
$requeteNews = $bdd->query($sqlNews);
// dans la variable $News je vais stocker un tableau d'objet correspondant à ma requete
$News = $requeteNews->fetchAll(PDO::FETCH_OBJ);

?>
<div class="col-12">
  <?php
  // Je vais générer les boutons mais de combien en ai-je besoin ?
  // autant que de page or le nb de page = au nombre toal de nws divisé par le nombre de news qu'on veux sur une page le tout arrondi à l'unité supérieure
  $nbPage = ceil(sizeof($allNews) / $nbCardPerPage);
  // J'ai le nombre max donc je fais une boucle pour les générer automatiquement la boucle for est tout indiquée puisqu'elle incrémente une variable ce qui m'interesse
  // je part de 1 (le 0 ne m'interesse pas ici je ne vaux pas l'afficher)
  for ($i = 1; $i <= $nbPage; $i++) {
    # code...
    // Je génère donc un lien avec un numéro de page en variable dans l'url
  ?>
    <a href="news.php?p=<?php echo $i; ?>#news_section" class="btn btn-outline-secondary" role="button" aria-pressed="true"><?php echo $i; ?></a>
  <?php
  }
  ?>
</div>
<div id="news_fullContent">
<?php
// maintenant j'affiche les news que je veux avec les limit 
foreach ($News as $newsOK) {
  # code...
  // pour récupérer les newss j'ai opté pour PDO::FETCH_OBJ donc je vais avoir un objet dans $News d'où les -> pour appeler les champs de la table
?>
  <div class="news">
    <div class="card">
      <img src="uploads/<?php echo $newsOK->news_image; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <div class="card-text-top">
          <h5 class="card-title"><?php echo $newsOK->news_titrePresentation; ?></h5>
        </div>
        <p class="card-text"><?php echo $newsOK->news_micro; ?></p>
        <div class="footer_card_content">
          <div class="autor_content">
            <!--<a target="_blank" href="https://icones8.fr/icons/set/writer-male">Writer male icon</a> icône par <a target="_blank" href="https://icones8.fr">Icons8</a> -->
            <img src="IMG/icone_createur_news.png" alt="écrit par créateur">
            <span><?php echo $newsOK->news_editeur; ?></span>
          </div>
        </div>

        <a href="news_inside.php?news_id=<?php echo $newsOK->news_id; ?>" class="btn btn-primary">Voir la news</a>
        <div class="content_date_news">
          <h5 class="date_news"><span>6 Mai</span><!--?php echo "6 mai" ?>--></h5>
        </div>
      </div>
    </div>
  </div>

<?php
}

?>
</div>