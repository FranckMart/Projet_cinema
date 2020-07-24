<?php require_once("include/bddConfig/bdd.php"); // Connexion à la base de données

// Changement du modal si l'utilisateur souhaite se déconnecter
if (isset($_POST['deco'])) {
    
    session_destroy();
    header("Location: index.php?deco=ok");
    exit;
}?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Intégration de bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Intégration du CSS -->
    <link rel="stylesheet" href="CSS/kit_UI.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/modal_user.css">
    <link rel="stylesheet" href="CSS/accueil.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <title>MovieDvice</title>
    <!-- description du site pour améliorer le référencement -->
    <meta name="description" content="MovieDvice, le site de référence des critiques cinéma et séries ! Découvrez également nos news hébdomadaire pour vous tenir informé des nouvautés  ">
</head>

<body>

<!-- include des types de modal que l'utilisateur est susceptible de voir -->
    <?php include("include/modal/modal.php"); ?>
    <?php include("include/modal/modal_deco.php"); ?>
    <?php include("include/modal/modal_comeUp.php"); ?>
   

 
<!-- include du header -->
        <?php include("include/header_nav.php"); ?>


    <section>

    <!-- include de la page d'accueil -->
        <?php include("include/showContent/accueil-navigation.php"); ?>

    </section>

     <!-- include du footer -->
    <?php include("include/footer.php"); ?>

     <!-- include des fichiers javascript -->
    <?php include("include/script_js.php"); ?>

</body>

</html>