<?php require_once("include/bddConfig/bdd.php"); 
ini_set('display_errors','On');
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/kit_UI.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/modal_user.css">
    <link rel="stylesheet" href="CSS/global_critique.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <title>Critique Film/Série</title>
</head>

<body>


<?php include("include/modal/modal.php"); ?>
    <?php include("include/modal/modal_deco.php"); ?>
    <?php include("include/modal/modal_comeUp.php"); ?>
   

    

        <?php include("include/header_nav.php"); ?>

    
    <section>
    <h1>TEST</h1>
        <?php include('include/showContent/global_critique_content.php'); ?>
    </section>



    <?php include("include/footer.php"); ?>
    <?php include("include/script_js.php"); ?>

    <script src="JS/choice_film_serie.js"></script>
</body>

</html>