<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/kit_UI.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/modal_user.css">
    <link rel="stylesheet" href="css/formFilmSerie.css">
    <title></title>
</head>

<body>

    <?php include("include/modal.php"); ?>

    <header>

        <?php include("include/header_nav.php"); ?>

    </header>
    <!-- j'ouvre mon formulaire -->
    <form action="include/traitement_form.php" method="POST" class="ffs">
        <!-- premier partie du formulaire -->
        <?php include("include/ffs_1.php"); ?>
        <!-- deuxième partie du formulaire -->
        <?php include("include/ffs_2.php"); ?>
        <!-- troisième partie du formulaire -->
        <?php include("include/ffs_3.php"); ?>

    </form>

    <?php include("include/script_js.php"); ?>
    <script src="js/modalFormFS.js"></script>
</body>

</html>