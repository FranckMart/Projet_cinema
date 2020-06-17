<?php
require_once("../include/bddConfig/bdd.php");





// Traitement d'ajout d'une image dans la table news 
if (!empty($_FILES)) {
    // $_Files est une requete qui permet de traiter un fichier présent lors de l'envoie du formulaire
    $file = $_FILES['news_image'];

    // Je récupère toutes les informations utiles au traitement de l'ajout d'une image dans la table
    $fileName = $_FILES['news_image']['name'];
    $fileTmpName = $_FILES['news_image']['tmp_name'];
    $fileSize = $_FILES['news_image']['size'];
    $fileError = $_FILES['news_image']['error'];
    $fileType = $_FILES['news_image']['type'];

    // Je vérifie le type de fichier 
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    // j'ajoute un tableau comprenant les types de fichier valide à l'insertion
    $allowed = array('jpg', 'jpeg', 'png');

    // Si le type de fichier correspond à une valeur du tableau alors on fais l'insertion
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            // Si la taille de l'image à un taille inférieur à 10mo alors on traite l'insertion de l'image dans un dossier destiné à l'insertion des img 
            if ($fileSize > 100000) {
                header("Location: ../news.php?fichier trop gros");
                exit;
                // Si la taille de l'image à un taille inférieur à 1mo alors on traite l'insertion de l'image dans un dossier destiné à l'insertion des img
            } else if ($fileSize < 1000000) {
                // On génrére un idifiant unique à une image
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                // On ajoute l'image au dossier voulu 
                $fileDestination = '../include/uploads/' . $fileNameNew;
                // S'assure que le fichier filename est un fichier téléchargé par HTTP POST. Si le fichier est valide, il est déplacé jusqu'à destination. //
                move_uploaded_file($fileTmpName, $fileDestination);
            }
        }
    } else if ($fileType !== $allowed) {

        header("Location: ../news.php?type de fichier incorrecte");
        exit;
    }
}


?>
<?php
// J'insère les informations dans la table news
$req = "INSERT INTO `news`(`news_titrePresentation`,`news_titreContenu`, `news_titreConclusion`, `news_micro`, `news_textPresentation`, `news_textContenu`, `news_textConclusion`, `news_editeur` ,`news_image`) 
            VALUES (:news_titrePresentation, :news_titreContenu, :news_titreConclusion, :news_micro, :news_textPresentation, :news_textContenu, :news_textConclusion, :news_editeur,  :news_image) ";



$form = $bdd->prepare($req);
// Pour question de sécurité la requete est préparé pour éviter une injection SQL 
// On récupère les informations
$form->bindValue(":news_titrePresentation", $_POST['news_titrePresentation']);
$form->bindValue(":news_titreContenu", $_POST['news_titreContenu']);
$form->bindValue(":news_titreConclusion", $_POST['news_titreConclusion']);
$form->bindValue(":news_micro", $_POST['news_micro']);
$form->bindValue(":news_textPresentation", $_POST['news_textPresentation']);
$form->bindValue(":news_textContenu", $_POST['news_textContenu']);
$form->bindValue(":news_textConclusion", $_POST['news_textConclusion']);
$form->bindValue(":news_editeur", $_POST['news_editeur']);
//$form->bindValue(":news_video", $_POST['news_video']);
$form->bindValue(":news_image", $fileDestination);




if ($form->execute()) {

    header("Location: ../news.php?insertion=réussi");
} else {
    header("Location: ../news.php?insertion=échec");
}
