<?php require_once("include/bddConfig/bdd.php");
if (isset($_POST['deco'])) {

  session_destroy();
  header("Location: index.php?deco=ok");
  exit;
} ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/kit_UI.css">
  <link rel="stylesheet" href="CSS/header.css">
  <link rel="stylesheet" href="CSS/modal_user.css">
  <link rel="stylesheet" href="CSS/critiqueFilm.css">
  <link rel="stylesheet" href="CSS/footer.css">
  <title>Media Inside</title>
</head>

<body>

  <?php include("include/modal/modal.php"); ?>
  <?php include("include/modal/modal_deco.php"); ?>

  <?php include('class/video.php'); ?>



  <?php include("include/header_nav.php"); ?>


  <?php
  
  $informations = Video::getVideo($_GET['video_id']);
  foreach ($informations as $information) { ?>

    <main class="main flex">
      <section class="topCritique flex">

        <article class="wrapCrittop flex">
          <h2 class="titreNone"><?php echo $information->video_titre; ?></h2>
          <p class="infoTop flex">Type :<?php echo $information->video_media; ?></p>
          <p class="infoTop flex">Genre : <?php echo $information->video_genre; ?></p>
          <p class="infoTop flex">Durée : <?php echo $information->video_duree; ?></p>
          <p class="infoTop flex">Date de sortie : <?php echo $information->video_dateSortie; ?></p>
          <p class="infoTop flex">Pays : <?php echo $information->video_origine; ?></p>
          <p class="infoTop flex">couleur : <?php echo $information->video_couleur; ?></p>
        </article>

        <div class="wrapperHResp flex">
          <h2 class="h2top"><?php echo $information->video_titre; ?></h2>
          <div class="baCritique flex">
            <?php echo $information->video_trailer ?>
          </div>
        </div>
      </section>

      <section class="wrapCritique flex">
        <article class="midCritiLeft flex">
          <p class="infoMid flex">Réalisateur : <?php echo $information->video_realisateur; ?> </p>
          <p class="infoMid flex">Acteur principal : <?php echo $information->video_acteurPrincipal; ?></p>
          <p class="infoMid flex">Acteurs Secondaires : <?php echo $information->video_casting; ?></p>
          <p class="infoMid flex">Box-office : <?php echo $information->video_boxOffice; ?> </p>
          <p class="infoMid flex">Distributeur : <?php echo $information->video_distributeur; ?> </p>
        </article>
        <article class="midCritiRight flex">
          <div class="flex infoUser">
            <p class="noteUser flex">note : <?php echo $information->video_note; ?>/5 </p>
          </div>
        </article>
      </section>


    </main>
  <?php } ?>

  <?php include("include/footer.php"); ?>
  <?php include("include/script_js.php"); ?>

</body>

</html>