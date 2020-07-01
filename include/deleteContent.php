<?php
if (isset($_GET["news_id"])) {

    require_once("../include/bddConfig/bdd.php"); // Connexion à la bdd MovieDvice
    $id_news = $_GET["news_id"];

    $delete_news = $bdd->query("DELETE FROM news WHERE news_id=$id_news");
    if ($delete_news) {
        header("Location: ../news.php?supression=réussi");
    } else {
        header("Location: ../news.php?supression=échec");
    }
}

if (isset($_GET["video_id"])) {

    require_once("../include/bddConfig/bdd.php"); // Connexion à la bdd MovieDvice
    $id_video = $_GET["video_id"];

    $delete_video = $bdd->query("DELETE FROM video WHERE video_id=$id_video");
    if ($delete_video) {
        header("Location: ../global_critique.php?supression=réussi");
    } else {
        header("Location: ../global_critique.php?supression=échec");
    }
}
