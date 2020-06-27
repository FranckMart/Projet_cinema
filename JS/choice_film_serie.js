// Appel de la fonction lorsque la page est complétement chargé 
$( document ).ready(function() {
    choice();
});

// Fonction de choix entre Film ou Série
function choice() {
    // évenement click sur le bloc Movie 
    $("#movie_choice_content").click(function () {

        // Changement du texte de l'id
        $("#title-intro-critique h2").text("Tout les Films");
        $("#title-intro-critique p").text("Retrouver ici toutes les critiques de film");
       


    })

    // évenement click sur le bloc Série
    $("#serie_choice_content").click(function () {
        // Changement du texte de l'id
        $("#title-intro-critique h2").text("Toutes les Séries");
        $("#title-intro-critique p").text("Retrouver ici toutes les critiques de série");

    })
  // Affichage de tout les films/séries
  showContent();
}

// Fonction qui me permet d'afficher le contenus des Film/Série

function showContent() {

    $("#selection_content").css("display", "flex");
    $("#movies_content").css("display", "flex");

}

