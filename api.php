<?php header("Content-Type: application/json");
require_once("include/bddConfig/bdd.php");


$requete = "";
if (isset($_GET["requete"])) {
    $requete = $_GET["requete"];
}
if($requete == ""){
    echo "[]";
} else {


    // On sélectionne les titres des videos avec une ressemblance au titre écrit dans la barre de recherche 
    $resultatsVideo = $GLOBALS["bdd"]->prepare('SELECT `video_id`,`video_titre` FROM `video` WHERE `video_titre` LIKE :requete');

    $resultatsVideo->execute(array(":requete" => "%". $requete . "%"));


    // On stocke les informations dans un tableau d'objet 
    $data = $resultatsVideo->fetchAll(PDO::FETCH_OBJ);

    echo(json_encode($data));


    
}
