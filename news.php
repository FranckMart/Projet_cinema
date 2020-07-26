<?php require_once("include/bddConfig/bdd.php");
ini_set('display_errors','On');
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
  <link rel="stylesheet" href="CSS/news.css">
  <link rel="stylesheet" href="CSS/footer.css">
  <title>News</title>
</head>


<body>

  <?php include("include/modal/modal.php"); ?>
  <?php include("include/modal/modal_deco.php"); ?>
  <?php include("include/modal/modal_comeUp.php"); ?>



  <?php include("include/header_nav.php"); ?>


  <article>
    <div id="titleTop">
      <h2>Les news de la journée</h2>
    </div>
  </article>
  <section id="carousel-section">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="include/uploads/disney+.jpg" class="d-block w-100" alt="image news">
          <div class="carousel-caption d-none d-md-block">
            <h5>Disney+ enfin une date pour la 4K !</h5>
            <p>la firme donne une date pour le retour de la 4K sur ses services</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="include/uploads/peakyBlinders.jpg" class="d-block w-100" alt="image news">
          <div class="carousel-caption d-none d-md-block">
          <h5>Peaky Blinders : où reprendra la saison 6 ?</h5>
            <p>Enfin un retour de la série culte ?</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="include/uploads/pedro-almodovar-penelope-cruz-antonio-banderas-oscars-2000.jpg" class="d-block w-100" alt="image news">
          <div class="carousel-caption d-none d-md-block">
            <h5>Pedro Almodóvar retrouve sa muse Penélope Cruz </h5>
            <p>Penélope Cruz retrouve Pedro Almodóvar pour son prochain film Madres Paralelas</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </section>

  </div>

  <div id="titleMiddle">
    <h2>Encore plus de news ! </h2>
    <div class="arrow_content">
      <a href="#news_section">
        <svg class="arrows">
          <path class="a1" d="M0 0 L30 32 L60 0"></path>
        </svg>
      </a>
    </div>
  </div>
  <section id="news_section">
    <?php
    // Vérification du droit d'accès à un certain contenu si le droit de l'utilisateur vaut 1 (admin) alors on affiche ce contenu

    if (!empty($_SESSION) && $_SESSION['user']->user_droit == 1) {
    ?>
      <!-- Affichage du bouton d'ajout de news (formulaire )-->
      <button type="button" class="btn btn-primary btn_addNews" data-toggle="modal" data-target="#news_modal">
        Ajouter une News
      </button>
    <?php
      include("include/formulaire/newsForm.php");
      
    } else {
    ?>
     <!-- Suppression  du bouton d'ajout de news (formulaire )-->
      <button type="button" class="btn btn-primary btn_addNews" data-toggle="modal" data-target="#news_modal" style="display: none">
        Ajouter une News
      </button>
    <?php
    }

    ?>
    <div class="news_content">
      <?php include("include/showContent/news_content.php"); ?>
    </div>
  </section>
  <?php include("include/footer.php"); ?>
  <?php include("include/script_js.php"); ?>
  <script src="JS/modalFormNews.js"></script>
</body>

</html>