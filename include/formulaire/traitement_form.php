<?php
// je veux recevoir mon formulaire, une fois reçu il faut que mes valeurs récupère aille dans mon objet,
// si ma var n'est pas vide
if (!empty($_POST['titre'])) {
    require_once("../bddConfig/bdd.php");

    if (isset($_POST['genre'])) {
        $genre = implode(", ", $_POST['genre']);
        $casting = implode(", ", $_POST['casting']);
    }
    // Traitement d'ajout d'une image dans la table video
    if (!empty($_FILES)) {
        // $_Files est une requete qui permet de traiter un fichier présent lors de l'envoie du formulaire
        $file = $_FILES['movie_image'];

        // Je récupère toutes les informations utiles au traitement de l'ajout d'une image dans la table
        $fileName = $_FILES['movie_image']['name'];
        $fileTmpName = $_FILES['movie_image']['tmp_name'];
        $fileSize = $_FILES['movie_image']['size'];
        $fileError = $_FILES['movie_image']['error'];
        $fileType = $_FILES['movie_image']['type'];
        // Je vérifie le type de fichier 
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        // j'ajoute un tableau comprenant les types de fichier valide à l'insertion
        $allowed = array('jpg', 'jpeg', 'png');

        // Si le type de fichier correspond à une valeur du tableau alors on fais l'insertion
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                // Si la taille de l'image à un taille supérieure à 1mo alors on renvoie un message d'erreur dans l'url
                if ($fileSize > 100000) {
                    header("Location: ../../formFilmSerie.php?fichier trop gros");
                    exit;
                     // Si la taille de l'image à un taille inférieur à 1mo alors on traite l'insertion de l'image dans un dossier destiné à l'insertion des img
                } else if ($fileSize < 100000) {


                    // On génrére un idifiant unique à une image
                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                    // On ajoute l'image au dossier voulu 
                    $fileDestination = "../uploads_movie/" . $fileNameNew;
                    // S'assure que le fichier filename est un fichier téléchargé par HTTP POST. Si le fichier est valide, il est déplacé jusqu'à destination. //
                    move_uploaded_file($fileTmpName, $fileDestination);
                }
            } 
            // Si le type de fichier n'est pas correcte on renvoie également une erreur 
        } else if($fileType !== $allowed) {
            
           header("Location: ../../formFilmSerie.php?type de fichier incorrecte");
           exit;
                 
        }
    }
?>
<?php

    $req = "INSERT INTO `video`(`video_titre`,`video_genre`, `video_synopsis`, `video_dateSortie`, `video_duree`, `video_boxOffice`, `video_realisateur`, `video_acteurPrincipal`, `video_note`, `video_origine`, `video_distributeur`, `video_casting`,`video_media`,`video_image`,`video_trailer`,`video_couleur`) 
            VALUES (:video_titre, :video_genre, :video_synopsis, :video_dateSortie, :video_duree, :video_boxOffice, :video_realisateur, :video_acteurPrincipal, :video_note, :video_origine, :video_distributeur, :video_casting, :video_media,:video_image,:video_trailer,:video_couleur) ";


    $form = $GLOBALS['bdd']->prepare($req);
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
    $form->bindValue(":video_distributeur", $_POST['distributeur']);
    $form->bindValue(":video_casting", $casting);
    $form->bindValue(":video_media", $_POST['media']);
    $form->bindValue(":video_image", $fileDestination);
    $form->bindValue(":video_trailer", $_POST['trailer']);
    $form->bindValue(":video_couleur", $_POST['couleur']);

    if ($form->execute()) {
        echo "insert reussi";

        header('Location: ../../global_critique.php?insertion=réussie');
    } else {
        header('Location: ../../global_critique.php?insertion=échouée');
    }
}


