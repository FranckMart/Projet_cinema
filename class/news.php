<?php
require_once("/Applications/MAMP/htdocs/Repository-gitKraken/projet_cinema/include/bdd.php");
/**
 * 
 */
class News
{
    protected $news_id;
    protected $news_image;
    protected $news_video;
    protected $news_titrePresentation;
    protected $news_titreContenu;
    protected $news_titreConclusion;
    protected $news_micro;
    protected $news_textPresentation;
    protected $news_textContenu;
    protected $news_textConclusion;
    protected $news_editeur;
    protected $news_date;

    public static function getNews($news_id){



        // je stocke ma requete dans une variable que je vais utiliser plus tard 
        $sqlNews = $GLOBALS["bdd"]->prepare("SELECT * FROM `news` WHERE `news_id` = :news_id");
        // $sqlNews = $GLOBALS["bdd"]->prepare($sqlNews);
        // j'envoie la requete au serveur et je stocke son retour dans une autre variable
        $sqlNews->bindValue(":news_id", $news_id);
        $sqlNews->execute();
        // dans la variable $sqlNews je vais stocker un tableau d'objet correspondant à ma requete
        return $sqlNews->fetch(PDO::FETCH_OBJ);

    }
}
