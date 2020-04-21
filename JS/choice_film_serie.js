function choice() {
    $("#movie_choice_content").click(function () {

        $("#title-intro-critique h2").text("Tout les Films");
        $("#title-intro-critique p").text("Retrouver ici toutes les critiques de film");
        showContent();


    })

    $("#serie_choice_content").click(function () {

        $("#title-intro-critique h2").text("Toutes les Séries");
        $("#title-intro-critique p").text("Retrouver ici toutes les critiques de série");
        showContent();

    })
}


function showContent() {

    $("#global_content_center").css("display", "block");

}
choice();