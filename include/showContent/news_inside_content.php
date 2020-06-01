<?php
require_once("class/news.php");

// Ici on fais appel à la class News et on appel la fonction getNews(avec comme paramétre la requette $Get pour récupérer la news voulu)
$news = News::getNews($_GET['news_id']);


?>

<!-- Mise en page de la news on récupère les informations de la table News-->
<section>
    <div id="TopTitle">
        <h2><?php echo $news->news_titrePresentation; ?></h2>
    </div>
    <div id="news_img_content">
        <img src="uploads/<?php echo $news->news_image; ?>" class="card-img-top" alt="...">
    </div>
    <div id="text_content">
        <div class="center_text">
            <p><?php echo $news->news_textPresentation; ?></p>
        </div>
    </div>
    <div id="centerTitle">
        <h2><?php echo $news->news_titreContenu; ?></h2>
    </div>
    <div id="text_center">
        <div class="center_text">
            <p><?php echo $news->news_textContenu; ?></p>
        </div>
    </div>
 <div id="conclusionTitle">
        <h2><?php echo $news->news_titreConclusion; ?></h2>
    </div>
    <div id="text_conclusion">
        <div class="center_text">
            <p><?php echo $news->news_textConclusion; ?></p>
        </div>
    </div>

</section>

