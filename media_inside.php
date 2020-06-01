<?php require_once("include/bddConfig/bdd.php"); 
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
  <link rel="stylesheet" href="css/kit_UI.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/modal_user.css">
  <link rel="stylesheet" href="css/critiqueFilm.css">
  <title></title>
</head>

<body>
  <?php include("include/modal/modal.php"); ?>
  <?php include('class/video.php') ?>



    <?php include("include/header_nav.php"); ?>


  <?php 
  $informations = Video::getVideo($_GET['video_id']);
  foreach ($informations as $information) { ?>

    <main class="main flex">
      <section class="topCritique flex">

        <article class="wrapCrittop flex">
          <h2 class="titreNone"><?php echo $information->video_titre; ?></h2> <!-- responsive -->
          <div href="#" class="bandeAnnonce">Lien vers annonce</div> <!-- responsive -->
          <p class="infoTop flex">type :<?php echo $information->video_media; ?></p>
          <p class="infoTop flex">genre : <?php echo $information->video_genre; ?></p>
          <p class="infoTop flex">durée : <?php echo $information->video_duree; ?></p>
          <p class="infoTop flex">Date de sortie : 18 octobre 1972 <?php //echo $information->video_genre; 
                                                                    ?></p>
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
          <p class="infoMid flex">Casting : <?php echo $information->video_casting; ?></p>
          <p class="infoMid flex">Box-office : 133 698 921 $ </p>
          <p class="infoMid flex">Budget :6 millions $ </p>
        </article>
        <article class="midCritiRight flex">
          <div class="flex infoUser">
            <p class="noteUser flex">note : <?php echo $information->video_note; ?>/5 </p>
          </div>
        </article>
      </section>

      <section class="bottomCritique">

        <div class="js-slider isystkSlider">
          <div class="view-layer">
            <p class="next-btn"><a href="#"><img src="./images/btn-next.png" alt="Next"></a></p>
            <ul class="parent paging dot">
              <li class="active child" data-pageno="1">
                <p>
                  <img class="IMG-c" src="IMG/cover-r4x3w1000-5884db910f4e1-robert-duvall-et-marlon-brando.jpg" />
                </p>
              </li>

              <li class="active child" data-pageno="2">
                <p>
                  <img class="IMG-c" src="IMG/3213261.jpg" />
                </p>
              </li>

              <li class="active child" data-pageno="3">
                <p>
                  <img class="IMG-c" src="IMG/6569bef5a92ab5202c8b155d53020562.jpg" />
                </p>
              </li>
            </ul>
            <p class="prev-btn"><a href="#"><img src="./images/btn-prev.png" alt="Prev"></a></p>
          </div>
        </div>

      </section>

    </main>
  <?php } ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="/path/to/cdn/jquery.js"></script> -->
  <script src="JS/jquery-isystkSlider.js"></script>
  <script src="JS/carousel.js"></script>

</body>

</html>