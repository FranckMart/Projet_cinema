<?php
require_once("bdd.php");


if(!empty($_FILES)){
    $file = $_FILES['news_image'];

    $fileName = $_FILES['news_image']['name'];
    $fileTmpName = $_FILES['news_image']['tmp_name'];
    $fileSize = $_FILES['news_image']['size'];
    $fileError = $_FILES['news_image']['error'];
    $fileType = $_FILES['news_image']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("location: news.php?uploadsuccess");
            } else {
                echo "Fichier trop gros.";
            }
        } else {
            echo "Il y a une erreur.";
        }
    } else {
        echo "Vous ne pouvez pas envoyer un fichier de ce type.";
}

}

    



?>
<?php
    $req = "INSERT INTO `news`(`news_titrePresentation`,`news_titreContenu`, `news_titreConclusion`, `news_micro`, `news_textPresentation`, `news_textContenu`, `news_textConclusion`, `news_editeur` ,`news_image`) 
            VALUES (:news_titrePresentation, :news_titreContenu, :news_titreConclusion, :news_micro, :news_textPresentation, :news_textContenu, :news_textConclusion, :news_editeur,  :news_image) ";



$form = $bdd->prepare($req);
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




    if($form->execute()){
       
        header('Location:../news.php?insertion=réussi');
    }else{
        header('Location:../news.php?insertion=échec');
    }




