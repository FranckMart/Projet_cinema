<?php
require_once("../include/bddConfig/bdd.php"); // Connexion à la bdd MovieDvice


// Traitement d'ajout d'une image dans la table news 
if (!empty($_FILES)) {
    // $_Files est une requete qui permet de traiter un fichier présent lors de l'envoie du formulaire
    $file = $_FILES['news_image'];

    // Je récupère toutes les informations utiles au traitement de l'ajout d'une image dans la table

    $fileName = $_FILES['news_image']['name']; // Le nom original du fichier, tel que sur la machine du client web. 
    $fileTmpName = $_FILES['news_image']['tmp_name'];  // Le nom temporaire du fichier qui sera chargé sur la machine serveur. 
    $fileSize = $_FILES['news_image']['size']; // La taille, en octets, du fichier téléchargé.
    $fileError = $_FILES['news_image']['error']; // Le code d'erreur associé au téléchargement de fichier. 
    $fileType = $_FILES['news_image']['type'];// Le type MIME du fichier, si le navigateur a fourni cette information. Par exemple, cela pourra être "image/gif"

    // Je vérifie le type de fichier 
    $fileExt = explode('.', $fileName); // Ajout d'un point à la fin du nom de l'image intégré 
    $fileActualExt = strtolower(end($fileExt)); //  modification du text de l'extention à la fin du nom du fichier (test.jpg) en miniscule 

    // j'ajoute un tableau comprenant les types de fichier valide à l'insertion
    $allowed = array('jpg', 'jpeg', 'png');

    // Si le type de fichier correspond à une valeur du tableau $allowed alors on fais l'insertion
    if (in_array($fileActualExt, $allowed)) {
        // Si le fichier ne comprends aucune erreur on test l'intégration
        if ($fileError === 0) {
            // Si la taille de l'image à un taille inférieur à 1mo alors on traite l'insertion de l'image dans un dossier destiné à l'insertion des img 
            if ($fileSize > 100000) {
                // Redirection avec message d'erreur 
                header("Location: ../news.php?fichier trop gros");
                exit;
                // Si la taille de l'image à un taille inférieur à 1mo alors on traite l'insertion de l'image dans un dossier destiné à l'insertion des img
            } else if ($fileSize < 1000000) {
                // On génrére un identifiant unique à une image
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                // On ajoute l'image au dossier voulu 
                $fileDestination = '../include/uploads/' . $fileNameNew;
                // S'assure que le fichier filename est un fichier téléchargé par HTTP POST. Si le fichier est valide, il est déplacé jusqu'à destination. //
                move_uploaded_file($fileTmpName, $fileDestination);
            }
        }
        // Si le type de fichier n'est pas valide alors on envoie une erreur dans l'url
    } else if ($fileType !== $allowed) {
        // Redirection avec message d'erreur 
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
