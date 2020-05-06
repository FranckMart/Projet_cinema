<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/kit_UI.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/modal_user.css">
  <link rel="stylesheet" href="css/news.css">
  <title></title>
</head>


<body>


  <?php include("include/modal.php"); ?>

  <header>

    <?php include("include/header_nav.php"); ?>

  </header>

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
          <img src="uploads/batman_2021.jpg" class="d-block w-100" alt="image news">
          <div class="carousel-caption d-none d-md-block">
            <h5>Batman est de retour !</h5>
            <p>Le film batman va étre dans toutes les salles en 2021</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="uploads/soul_pixar.jpg" class="d-block w-100" alt="image news">
          <div class="carousel-caption d-none d-md-block">
            <h5>Le nouveau pixar aura du retard ! </h5>
            <p>C'est un fais le covid-19 change les plans de l'industrie du cinéma le film n'a pas encore de nouvelle date </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="uploads/dune_2021.jpg" class="d-block w-100" alt="image news">
          <div class="carousel-caption d-none d-md-block">
            <h5>Dune est de retour !</h5>
            <p>Voici une des premières images de Dune, le film sera dans nos salles en 2021</p>
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
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn_addNews" data-toggle="modal" data-target="#news_modal">
      Ajouter une News
    </button>
    <div class="news_content">
      <?php include("include/news_content.php"); ?>
    </div>
  </section>

  <?php include("include/script_js.php"); ?>

</body>

</html>