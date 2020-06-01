<?php
require_once("bddConfig/bdd.php");


function WordSearch($word)
{


    // On sélectionne les titres des videos avec une ressemblance au titre écrit dans la barre de recherche 
    $resultatsVideo = $GLOBALS["bdd"]->prepare('SELECT `video_id`,`video_titre` FROM `video` WHERE `video_titre` LIKE "%' . $word . '%"');
    // On sélectionne les titres des news avec une ressemblance au titre écrit dans la barre de recherche 
    $resultatsNews = $GLOBALS["bdd"]->prepare('SELECT `news_titrePresentation`FROM `news` WHERE `news_titrePresentation` LIKE "%' . $word . '%"');

    //var_dump($resultats);


    $resultatsVideo->execute();
    $resultatsNews->execute();


    // On stocke les informations dans un tableau d'objet 
    $resultats["video"] = $resultatsVideo->fetchAll(PDO::FETCH_OBJ);
    $resultats["news"] =  $resultatsNews->fetchAll(PDO::FETCH_OBJ);

    //$showResultats = implode(",", $resultats);

    // On return le résultat des 2 tableaux 
    return $resultats;
}
?>
<form method="GET">


    <?php


    if (isset($_GET["search"]) and !empty($_GET["search"])) {
        $tabRe = WordSearch($_GET["search"]);
        // Boucle par catégorie de recherche : news, video,..
        foreach ($tabRe as $key => $value) {
            foreach ($value as $result) {

                if (isset($result->video_titre)) {
                    echo "<option value='" . $result->video_titre . "'>";
                    $tabVideoResult = $result->video_id;
                }
            }
        }
    }
    ?>
    <li class="search_content"><a href="media_inside.php?video_id=<?php echo $titre; ?>"><img src="IMG/search.png" alt="Recherche"></a><input type="text" name="search" id="suggest" placeholder="...Search" list="MySuggest" autocomplete="off" value="<?php if(isset($titre)) { echo $titre; } ?>"></li>
    <datalist id="MySuggest">

    </datalist>
</form>


<!--
<li class="search_content"><a href="#"><img src="IMG/search.png" alt="Recherche"></a><input type="search" name="recherche" id="recherche" placeholder="...Search"></li>
-->