<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/kit_UI.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/modal_user.css">
    <link rel="stylesheet" href="css/critiqueFilm.css">
    <script src="js/carousel.js" async></script>
    <title></title>
</head>
<body>
    <?php include("include/modal.php"); ?>    
    <?php include('class/media.php') ?>

<header>
    <?php include("include/header_nav.php"); ?>
</header>

    <?php include("include/modal.php");
   $informations = media :: getVideo($video_id = 1);
   foreach ($informations as $information){
       var_dump($information->video_titre); ?>

    <section class="topCritique flex">
        <article class="wrapCrittop flex">
            <h2 class="titreNone">titre : <?php echo $information->video_titre; ?></h2>
            <p class="infoTop flex">type : <?php echo $information->video_genre; ?></p>
            <p class="infoTop flex">genre : <?php echo $information->video_genre; ?></p>
            <p class="infoTop flex">durée : <?php echo $information->video_genre; ?></p>
            <p class="infoTop flex">Date de sortie : <?php echo $information->video_genre; ?></p>
            <p class="infoTop flex">Pays : <?php echo $information->video_genre; ?></p>
            <p class="infoTop flex">couleur : <?php echo $information->video_genre; ?></p>
            <a href="#" class="bandeAnnonce">Lien vers annonce</a>
        </article>
        <div class="wrapperHCrit flex">
            <h2 class="h2top">titre : </h2>
            <div class="baCritique flex">
            </div>
        </div>
    </section>

    <section class="wrapCritique flex">
        <article class="midCritiLeft flex">
            <p class="infoMid">Réalisateur : </p>
            <p class="infoMid">Acteur principal : </p>
            <p class="infoMid">Casting : </p>
            <p class="infoMid">synopsis : </p>
            <p class="infoMid">Box-office : </p>
            <p class="infoMid">Box-Distributeur : </p>
        </article>
        <article class="midCritiRight flex">
            <p>note : </p>
            <p></p>
            <p></p>
        </article>
    </section>

<section class="bottomCritique">
    <div>
        
    </div>
</section>
<?php } ?>
</body>
</html>