
<?php 
require_once("include/bdd.php");
    try{
        // combien d'apprenants je veux sur une page
        // je vais le stocker das une variable afin de pouvoir m'adapter quelque soit le nb d'apprenants par promotion, le nb d'apprenants totals et de fait le nb d'apprenants à afficher
        $nbCardPerPage = 4;

        // je récupère ici tous les apprenants de la promotion
        // la requete
        $sqlAllNews = "SELECT * FROM `news`";
        // que j'envoie au serveur
        $requeteAllNews = $bdd->query($sqlAllNews);
        // avant de récupérer les résultats
        $allNews = $requeteAllNews->fetchAll(PDO::FETCH_OBJ);

        // je teste si l'utilisateur souhaite voir une page en particulié
        if(!empty($_GET['p'])){
            $p = $_GET['p'];    
        } else {
            $p = 1;
        }
        
        // je calcul ici le point de départ pour ma requete SQL future
        $offset = ($p-1)*$nbCardPerPage; 
        // Si l'offset est superieur aux nombres d'apprenants, alors je met l'offset à 0 afin d'éviter la page blanche sans apprenant
        if($offset < sizeof($allNews)){
            $offset = 0;
        }
        
        // je stocke ma requete dans une variable que je vais utiliser plus tard 
        //$sqlApprenants = "SELECT * FROM `stagiaire` AS s JOIN `utilisateur` AS u ON (s.`stagiaire_utilisateur_id` = u.`utilisateur_id`) WHERE s.`stagiaire_formation_id` = 1 ORDER BY s.`stagiaire_prenom` ASC LIMIT ".$offset.",".$nbCardPerPage.";";
        $sqlNews = "SELECT news_id,news_image,news_titre, news_micro, news_editeur, news_date FROM news ORDER BY news_date DESC";
        // j'envoie la requete au serveur et je stocke son retour dans une autre variable
        $requeteNews = $bdd->query($sqlNews); 
        // dans la variable $apprenants je vais stocker un tableau d'objet correspondant à ma requete
        $News = $requeteNews->fetchAll(PDO::FETCH_OBJ);
        
        // $apprenants avec un s contient la totalité des résultats tandis que $apprenant sans s, lui ne contient qu'un seul résultat, une seule ligne de la bdd 
?>
<div class="col-12">
        <?php
        // Je vais générer les boutons mais de combien en ai-je besoin ?
        // autant que de page or le nb de page = au nombre toal d'apprenants divisé par le nombre d'apprenants qu'on veux sur une page le tout arrondi à l'unité supérieure
        $nbPage = ceil(sizeof($allNews)/$nbCardPerPage);
        // J'ai le nombre max donc je fais une boucle pour les générer automatiquement la boucle for est tout indiquée puisqu'elle incrémente une variable ce qui m'interesse
        // je part de 1 (le 0 ne m'interesse pas ici je ne vaux pas l'afficher)
        for ($i=1; $i <= $nbPage ; $i++) { 
            # code...
            // Je génère donc un lien avec un numéro de page en variable dans l'url
            ?>
        <a href="index.php?p=<?php echo $i;?>#cardNews" class="btn btn-outline-secondary" role="button" aria-pressed="true"><?php echo $i;?></a>
            <?php
        }
        ?>
    </div>

    <?php
        // maintenant j'affiche les apprenants que je veux avec les limit 
        foreach ($News as $newsOK) {
            # code...
            // pour récupérer les apprenants j'ai opté pour PDO::FETCH_OBJ donc je vais avoir un objet dans $apprenant d'où les -> pour appeler les champs de la table
            ?>
        <div class="news">
        <div class="card">
          <img src="IMG_news/<?php echo $newsOK->news_image;?>.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-text-top">
              <h5 class="card-title"><?php echo $newsOK->news_titre; ?></h5>
            </div>
            <p class="card-text"><?php echo $newsOK->news_micro; ?></p>
            <div class="footer_card_content">
            <div class="autor_content">
                <!--<a target="_blank" href="https://icones8.fr/icons/set/writer-male">Writer male icon</a> icône par <a target="_blank" href="https://icones8.fr">Icons8</a> -->
                <img src="IMG/icone_createur_news.png" alt="écrit par créateur">
                <span><?php echo $newsOK->news_editeur; ?></span>
              </div>
            </div>
           
            <a href="news_inside.php?news=<?php echo $newsOK->news_id; ?>"class="btn btn-primary">Voir la news</a>
            <div class="content_date_news">
              <h5 class="date_news"><?php echo "16 Avril" ?></h5>
            </div>
          </div>
        </div>
      </div>
            <?php
        }
    } catch(PDOException $e){
        // en cas d'erreur
        echo $e->getMessage();
    }
    
?>
   </div>


