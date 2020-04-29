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
    <?php include("include/modal.php"); ?>    
    <?php include('class/media.php') ?>

<header>
    <?php include("include/header_nav.php"); ?>
</header>

    <?php include("include/modal.php");
   $informations = media::getMedia($video_id = 1);
   foreach ($informations as $information){ ?>

<main class="main flex">
    <section class="topCritique flex">

        <article class="wrapCrittop flex">
            <h2 class="titreNone"><?php echo $information->video_titre; ?></h2> <!-- responsive -->
            <div href="#" class="bandeAnnonce">Lien vers annonce</div> <!-- responsive -->
            <p class="infoTop flex">type : <?php echo $information->video_genre; ?></p>
            <p class="infoTop flex">genre : <?php echo $information->video_genre; ?></p>
            <p class="infoTop flex">durée : <?php echo $information->video_genre; ?></p>
            <p class="infoTop flex">Date de sortie : <?php echo $information->video_genre; ?></p>
            <p class="infoTop flex">Pays : <?php echo $information->video_genre; ?></p>
            <p class="infoTop flex">couleur : <?php echo $information->video_genre; ?></p>
        </article>
        
        <div class="wrapperHResp flex">
            <h2 class="h2top"><?php echo $information->video_titre; ?></h2>
            <div class="baCritique flex">
            </div>
        </div>
    </section>

    <section class="wrapCritique flex">
        <article class="midCritiLeft flex">
            <p class="infoMid flex">Réalisateur : </p>
            <p class="infoMid flex">Acteur principal : </p>
            <p class="infoMid flex">Casting : </p>
            <p class="infoMid flex">synopsis : </p>
            <p class="infoMid flex">Box-office : </p>
            <p class="infoMid flex">Box-Distributeur : </p>
        </article>
        <article class="midCritiRight flex">
            <div class="flex infoUser">
                <p class="noteUser flex">note : </p>
                <p class="noteUser flex"></p>
                <p class="noteUser flex"></p>
            </div>
        </article>
    </section>

<section class="bottomCritique">

	<div class="js-slider isystkSlider">
    <p class="next-btn"><a href="#"><img src="./images/btn-next.png" alt="Next" ></a></p>
	  <div class="view-layer">
	    <ul class="parent">
	      <li class="child">
	        <p>
	          <img src="IMG/partage.jpg" />
	        </p>
	      </li>
	      <li class="child">
	        <p>
	          <img src="IMG/partage.jpg" />
	        </p>
	      </li>
	      <li class="child">
	        <p>
	          <img src="IMG/serie_choice.jpg" />
	        </p>
	      </li>
	    </ul>
      </div>
      <p class="prev-btn"><a href="#"><img src="./images/btn-prev.png" alt="Prev" ></a></p>
    </div>
    
    <!-- <div>


	  <ul class="paging dot">
	    <li class="active" data-pageno="1"></li>
	    <li data-pageno="2"></li>
	    <li data-pageno="3"></li>
	  </ul>
	</div> -->

</section>
</main>
<?php } ?>

<script src="/path/to/cdn/jquery.js"></script>
<script src="/path/to/js/jquery-isystkSlider.js"></script>
</body>
</html>