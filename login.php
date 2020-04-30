<?php
// je teste si les champs existe et et si aucun n'est vide
if (!empty($_POST['user_mail']) && !empty($_POST['user_password'] && !empty($_POST['user_droit']))) {
    // je teste si le mail est bien formé (pas s'il existe)
    if (filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL)) {
        // echo "ok";
        // j'intègre ma connexion à la bdd
        require_once("include/bdd.php");

        // si les mdp sont cryptés
        try {

            // Et si vous voulez vous en protéger :
            // Je récupère tous les utilisateurs en fonction du mail.
            // Le mail étant définit comme unique dans la bdd : seul 2 cas sont possible : soit il y a 1 utilisateur soit il n'y en a pas
            $requeteSQL = "SELECT * FROM `user` WHERE `user_mail` = :user_mail";

            // Afin d'éviter les injections SQL je prépare ma requête
            $reqprepare = $bdd->prepare($requeteSQL);
            // j'intègre le mail à ma requête
            $reqprepare->bindValue(":user_mail", $_POST['user_mail']);
            // j'exécute ma requete
            $reqprepare->execute();

            // Si ma requete ne renvoit aucune ligne : cela veut dire que l'email n'est pas dans la bdd
            if ($reqprepare->rowCount() == 0) {
                header("Location: index.php?errorLogin=mailInexistant");
                exit;
                //echo "Le mail n'est pas enregistré dans la bdd";
            } else {
                // je récupère les infos nottamment le mot de passe que je stocke dans la variable
                $utilisateur = $reqprepare->fetch(PDO::FETCH_OBJ);

                // ensuite je test si les mdp correspondent entre eux
                if (password_verify($_POST['user_password'], $utilisateur->user_password)) {
                    // lorsque l'utilisateur se connecte, rempli une variable de session qui sera accessible de partout
                    $_SESSION['user'] = $utilisateur;

                    // Je redirige vers la page d'accueil. Cette page devient totalement invisible pour celui qui navigue sur le site
                    header("Location: index.php?login=ok");
                    exit;
                } else {
                    header("Location: index.php?errorLogin=mdp");
                    exit;
                    //echo "Le mdp est faux";
                }
            }

        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    } else {
        header("Location: index.php?errorLogin=mailInvalide");
        exit;
        //echo "entrez un email valide : ".$_POST['utilisateur_mail']." est pourri !";
    }
} else {
    header("Location: index.php?errorLogin=noData");
    exit;
    //echo "erreur<br>tu recomence trouduc";

    
}
