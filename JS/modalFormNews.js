var titrePresentationElt = document.getElementById("titre_presentation");
var microElt = document.getElementById("news_micro");
var textPresentationElt = document.getElementById("news_textPresentation");
var titreContenuElt = document.getElementById("news_titreContenu");
var textContenuElt = document.getElementById("news_textContenu")
var titreConclusionElt = document.getElementById("news_titreConclusion");
var textConclusionElt = document.getElementById("news_textConclusion");
var editeurElt = document.getElementById("news_editeur");
var imageElt = document.getElementById("news_image");


function validateFormNews() {

    var titrePresentation = document.forms["formElt"]["titre_presentation"].value;
    var micro = document.forms["formElt"]["news_micro"].value;
    var textPresentation = document.forms["formElt"]["news_textPresentation"].value;
    var titreContenu = document.forms["formElt"]["news_titreContenu"].value;
    var textContenu = document.forms["formElt"]["news_textContenu"].value
    var titreConclusion = document.forms["formElt"]["news_titreConclusion"].value;
    var textConclusion = document.forms["formElt"]["news_textConclusion"].value;
    var editeur = document.forms["formElt"]["news_editeur"].value;
    var image = document.forms["formElt"]["news_image"].value;



    if (titrePresentation == "" || titrePresentation.length > 100) {
        titrePresentationElt.style.borderColor = "red";
        alert("Veuillez ajouter un titre de présentation inférieur à 100 caractères");
        return false;
    }

    if (micro == "" || micro.length > 255) {
        microElt.style.borderColor = "red";
        alert("Veuillez ajouter une micro_description inférieur à 255 caractères");
        return false;
    }

    if (textPresentation == "") {
        textPresentationElt.style.borderColor = "red";
        alert("Veuillez ajouter un texte de présentation");
        return false;
    }

    if (titreContenu == "" || titreConclusion.length > 100) {
        titreContenuElt.style.borderColor = "red";
        alert("Veuillez ajouter un titre de contenu inférieur à 100 caractères");
        return false;
    }

    if (textContenu == "") {
        textContenuElt.style.borderColor = "red";
        alert("Veuillez ajouter un texte contenu");
        return false;
    }

    if (titreConclusion == "" || titreConclusion.length > 100) {
        titreConclusionElt.style.borderColor = "red";
        alert("Veuillez ajouter un titre de conclusion inférieur à 100 caractères");
        return false;
    }


    if (textConclusion == "") {
        textConclusionElt.style.borderColor = "red";
        alert("Veuillez ajouter un texte de conclusion");
        return false;
    }

    if (editeur == "" || editeur.length > 30) {
        editeurElt.style.borderColor = "red";
        alert("Veuillez ajouter un editeur inférieur à  30 caractères");
        return false;
    }
    if (image == "") {
        imageElt.style.borderColor = "red";
        alert("Veuillez ajouter une image");
        return false;
    }


}