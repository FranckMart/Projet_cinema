<?php
// je veux recevoir mon formulaire, une fois reçu il faut que mes valeurs récupère aille dans mon objet,

// si ma var n'est pas vide
if (!empty($_POST['titre'])) {
    require_once("bdd.php");

    if(isset($_POST['genre'])){
        $genre = implode(", ", $_POST['genre']);
        $casting = implode(", ", $_POST['casting']);
        // $couleur = implode(",", $_POST['couleur']);


    }

?>
<pre>
    <?=var_dump($_POST['genre'])."<br>";?>
    <?=var_dump($_POST['casting'])."<br>";?>
    <!-- <?=var_dump($_POST['couleur']);?> -->
</pre>
<?php

    $req = "INSERT INTO `video`(`video_titre`,`video_genre`, `video_synopsis`, `video_dateSortie`, `video_duree`, `video_boxOffice`, `video_realisateur`, `video_acteurPrincipal`, `video_note`, `video_origine`, `video_distributeur`, `video_casting`) 
            VALUES (:video_titre, :video_genre, :video_synopsis, :video_dateSortie, :video_duree, :video_boxOffice, :video_realisateur, :video_acteurPrincipal, :video_note, :video_origine, :video_distributeur, :video_casting) ";


$form = $bdd->prepare($req);
$form->bindValue(":video_titre", $_POST['titre']);
$form->bindValue(":video_genre", $genre);
$form->bindValue(":video_synopsis", $_POST['synopsis']);
$form->bindValue(":video_dateSortie", $_POST['dateSortie']);
$form->bindValue(":video_duree", $_POST['duree']);
$form->bindValue(":video_boxOffice", $_POST['boxOffice']);
$form->bindValue(":video_realisateur", $_POST['realisateur']);
$form->bindValue(":video_acteurPrincipal", $_POST['acteurPrincipal']);
$form->bindValue(":video_note", $_POST['note']);
$form->bindValue(":video_origine", $_POST['origine']);
// $form->bindValue(":video_couleur", $_POST['couleur']);
$form->bindValue(":video_distributeur", $_POST['distributeur']);
$form->bindValue(":video_casting", $casting);

    if($form->execute()){
        echo "insert reussi";
    }else{
        echo "insertion échoué";
    }
} else {
    header('Location : formFilmSerie.php?erreur=mdpvide');
}



