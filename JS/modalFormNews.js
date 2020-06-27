const titrePresentationElt = document.getElementById("titre_presentation");
const microElt = document.getElementById("news_micro");
const textPresentationElt = document.getElementById("news_textPresentation");
const titreContenuElt = document.getElementById("news_titreContenu");
const textContenuElt = document.getElementById("news_textContenu")
const titreConclusionElt = document.getElementById("news_titreConclusion");
const textConclusionElt = document.getElementById("news_textConclusion");
const editeurElt = document.getElementById("news_editeur");
const imageElt = document.getElementById("news_image");


function validateFormNews() {

    const titrePresentation = document.forms["formElt"]["titre_presentation"].value;
    const micro = document.forms["formElt"]["news_micro"].value;
    const textPresentation = document.forms["formElt"]["news_textPresentation"].value;
    const titreContenu = document.forms["formElt"]["news_titreContenu"].value;
    const textContenu = document.forms["formElt"]["news_textContenu"].value
    const  titreConclusion = document.forms["formElt"]["news_titreConclusion"].value;
    const  textConclusion = document.forms["formElt"]["news_textConclusion"].value;
    const  editeur = document.forms["formElt"]["news_editeur"].value;
    const image = document.forms["formElt"]["news_image"].value;



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