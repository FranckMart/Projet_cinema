<?php
try{
    require_once("include/bdd.php");

    // je stocke ma requete dans une variable que je vais utiliser plus tard 
    //$sqlApprenants = "SELECT * FROM `stagiaire` AS s JOIN `utilisateur` AS u ON (s.`stagiaire_utilisateur_id` = u.`utilisateur_id`) WHERE s.`stagiaire_formation_id` = 1 ORDER BY s.`stagiaire_prenom` ASC LIMIT ".$offset.",".$nbCardPerPage.";";
    $sqlNews = $bdd->prepare("SELECT news_id ,news_image,news_video,news_titrePresentation,news_titreContenu,news_textPresentation,news_textContenu,news_textConclusion,news_editeur,news_date FROM news WHERE news_id = ?");
    // j'envoie la requete au serveur et je stocke son retour dans une autre variable
    $sqlNews->execute(array($_GET['news']));
    // dans la variable $apprenants je vais stocker un tableau d'objet correspondant à ma requete
    $News = $sqlNews->fetch();

    // $apprenants avec un s contient la totalité des résultats tandis que $apprenant sans s, lui ne contient qu'un seul résultat, une seule ligne de la bdd 
} catch(PDOException $e){
    // en cas d'erreur
    echo $e->getMessage();
}

?>
<section>
    <div id="TopTitle">
        <h2><?php echo $News['news_titrePresentation']; ?></h2>
    </div>
    <div id="news_img_content">
        <img src="IMG_news/<?php echo $News['news_image']; ?>.jpg" class="card-img-top" alt="...">
    </div>
    <div id="text_content">
        <div class="center_text">
            <p><?php echo $News['news_textPresentation']; ?></p>
        </div>
    </div>
    <div id="centerTitle">
        <h2><?php echo $News['news_titreContenu']; ?></h2>
    </div>
    <div id="text_bottom">
        <div class="center_text">
            <p><?php echo $News['news_textContenu']; ?></p>
        </div>
    </div>
</section>