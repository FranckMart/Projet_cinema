



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

    $("#selection_content").css("display", "flex");
    $("#movies_content").css("display", "flex");

}

/*
function getGenre(){
    $(".genre").click(function(){
        alert($(this).text());
    })
}
*/

choice();
//getGenre();