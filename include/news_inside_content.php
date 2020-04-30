<?php

require_once("class/news.php");


$news = News::getNews($_GET['news_id']);


?>

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
    <div id="text_bottom">
        <div class="center_text">
            <p><?php echo $news->news_textContenu; ?></p>
        </div>
    </div>
</section>

