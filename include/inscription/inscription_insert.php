<?php 
// je teste si les champs existe et et si aucun n'est vide
if(!empty($_POST['user_mail']) && !empty($_POST['user_password']) && !empty($_POST["user_pseudo"])){
    // je teste si le mail est bien formé (pas s'il existe)
    if(filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL)){
        // echo "ok";
        // j'intègre ma connexion à la bdd
        require_once("include/bddConfig/bdd.php");

try {

    // Je hash le mdp c'est à dire qu'il sera non decritpable par l'utilisateur
    $mdp = password_hash($_POST['user_password'],PASSWORD_DEFAULT);

    // J'insère les informations dans la table user
    $reqPrepare = $bdd->prepare('INSERT INTO user (user_mail,user_password,user_pseudo,user_born) VALUES(:user_mail, :user_password, :user_pseudo, :user_born)');

    // Pour question de sécurité la requete est préparé pour éviter une injection SQL 
    // On récupère les informations
    $reqPrepare->bindValue(":user_mail", $_POST["user_mail"]);
    $reqPrepare->bindValue(":user_password", $mdp);
    $reqPrepare->bindValue(":user_pseudo", $_POST["user_pseudo"]);
    $reqPrepare->bindValue(":user_born", $_POST["user_born"]);
    
    // Si la requete et exécuter alors on affiche un message d'insertion dans l'url 
    if ($reqPrepare->execute()) {
        header("Location: ../index.php?insertion=réussi");
        exit;
        // Sinon on affiche un message d'erreur
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

