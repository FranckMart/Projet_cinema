<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/kit_UI.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/modal_user.css">
    <link rel="stylesheet" href="css/global_critique.css">
    <title></title>
</head>

<body>


    <?php include("include/modal.php"); ?>

    <header>

        <?php include("include/header_nav.php"); ?>

    </header>
    <section>
        <div id="choice_content">
            <div class="movie_choice_content">
                <div class="movie_choice_textarea">
                    <a href="#">
                        <h2>Film</h2>
                    </a>
                    <div class="arrow_content">
                        <a href="#news_section">
                            <svg class="arrows">
                                <path class="a1" d="M0 0 L30 32 L60 0"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="serie_choice_content">
                <div class="serie_choice_textarea">
                    <a href="#">
                        <h2>Série</h2>
                    </a>
                    <div class="arrow_content">
                        <a href="#news_section">
                            <svg class="arrows">
                                <path class="a1" d="M0 0 L30 32 L60 0"></path>
                            </svg>
                        </a>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="title-intro-critique">
            <h2>Tout les films</h2>
            <p>Retrouver ici toutes les critiques de films et séries disponible
            </p>
        </div>



    </section>



    <?php include("include/script_js.php"); ?>

</body>

</html>