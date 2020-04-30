<?php 
// je teste si les champs existe et et si aucun n'est vide
if(!empty($_POST['user_mail']) && !empty($_POST['user_password']) && !empty($_POST["user_pseudo"])){
    // je teste si le mail est bien formé (pas s'il existe)
    if(filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL)){
        // echo "ok";
        // j'intègre ma connexion à la bdd
        require_once("bdd.php");

try {

    $mdp = password_hash($_POST['user_password'],PASSWORD_DEFAULT);

    $reqPrepare = $bdd->prepare('INSERT INTO user (user_mail,user_password,user_pseudo,user_born) VALUES(:user_mail, :user_password, :user_pseudo, :user_born)');

    $reqPrepare->bindValue(":user_mail", $_POST["user_mail"]);
    $reqPrepare->bindValue(":user_password", $mdp);
    $reqPrepare->bindValue(":user_pseudo", $_POST["user_pseudo"]);
    $reqPrepare->bindValue(":user_born", $_POST["user_born"]);
    
    if ($reqPrepare->execute()) {
        header("Location: ../index.php?insertion=réussi");
        exit;
    } else {
        header("Location: inscription.php?insertion=érreur");
        exit;
    }
}
catch(PDOException $exception){
        echo $exception->getMessage();
    }
  }
}
?>

