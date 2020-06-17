let modal = null;

const openModal = function (e) {
    e.preventDefault();
    const target = document.querySelector(e.target.getAttribute('href'));
    target.style.display = null;
    target.style.backgroundColor = "black";
    target.removeAttribute('aria-hidden');
    target.setAttribute('aria-modal', 'true');

    modal = target;
    modal.addEventListener('click', closeModal);
    modal.querySelector('.js-modal-close').addEventListener('click', closeModal);
    modal.querySelector('.js-modal-stop').addEventListener('click', stopPropagation);
}

const closeModal = function (e) {
    const targetColor = document.getElementsByClassName('a-modal');
    if (modal === null) return;
    e.preventDefault();
    modal.style.display = "none";
    //targetColor.style.backgroundColor = "white";
    //targetColor.style.backgroundColor = "black";
    modal.setAttribute('aria-hidden', 'true');
    modal.removeAttribute('aria-modal');
    modal.removeEventListener('click', closeModal);
    modal.querySelector('.js-modal-close').removeEventListener('click', closeModal);
    modal.querySelector('.js-modal-stop').removeEventListener('click', stopPropagation);
    modal = null;
}

function stopPropagation(e) {
    e.stopPropagation();
}

document.querySelectorAll(".js-modal").forEach(a => {
    a.addEventListener('click', openModal);
})

var titreElt = document.getElementById("titre");
var mediaElt = document.getElementById("media");
var realisateurElt = document.getElementById("realisateur_nom");
var acteurPrincipalElt = document.getElementById("acteurPrincipal");
var originElt = document.getElementById("origine")
var castingElt = document.getElementById("casting");
var dureeElt = document.getElementById("duree");
var noteElt = document.getElementById("note");
var dateSortieElt = document.getElementById("dateSortie");
var synopsisElt = document.getElementById("synopsis");
var movie_imageElt = document.getElementById("movie_image");
var trailerElt = document.getElementById("trailer");

function validateForm() {
    var titre = document.forms["formElt"]["titre"].value;
    var media = document.forms["formElt"]["media"].value;;
    var realisateur = document.forms["formElt"]["realisateur_nom"].value;
    var acteurPrincipal = document.forms["formElt"]["acteurPrincipal"].value;
    var origin = document.forms["formElt"]["origine"].value
    var casting = document.forms["formElt"]["casting"].value;
    var duree = document.forms["formElt"]["duree"].value;
    var note = document.forms["formElt"]["note"].value;
    var dateSortie = document.forms["formElt"]["dateSortie"].value;
    var synopsis = document.forms["formElt"]["synopsis"].value;
    var movie_image = document.forms["formElt"]["movie_image"].value;
    var trailer = document.forms["formElt"]["trailer"].value;


    if (titre == "" || titre.length > 100) {
        titreElt.style.borderColor = "red";
        alert("Veuillez ajouter un titre inférieur à 100 caractères");
        return false;
    }
    if (media == "" || media.length > 10 ) {
        mediaElt.style.borderColor = "red";
        alert("Veuillez ajouter un type de média inférieur à 10 caractères");
        return false;
    }
    
    if (realisateur == "" || realisateur.length > 70 ) {
        realisateurElt.style.borderColor = "red";
        alert("Veuillez ajouter un réalisateur maximum 70 caractères");
        return false;
    }
    if (acteurPrincipal == "" || acteurPrincipal.length > 70) {
        acteurPrincipalElt.style.borderColor = "red";
        alert("Veuillez ajouter un acteur principal  maximum 70 caractères");
        return false;
    }
    if (origin = "" || origin.length > 30) {
        originElt.style.borderColor = "red";
        alert("Veuillez ajouter un pays d'origine maximum 30 caractères");
        return false;
    }
    if (casting == "" || casting.length > 255) {
        castingElt.style.borderColor = "red";
        alert("Veuillez ajouter au moins un acteur secondaire maximum 255 caractères");
        return false;
    }
    if (duree == "") {
        dureeElt.style.borderColor = "red";
        alert("Veuillez ajouter une durée");
        return false;
    }
    if (note == "" || note > 5 || note < 0) {
        castingElt.style.borderColor = "red";
        alert("Veuillez ajouter une note inférieur ou égal à 5");
        return false;
    }
    if (dateSortie == "") {
        dateSortieElt.style.borderColor = "red";
        alert("Veuillez ajouter une date de sortie");
        return false;
    }
    if (synopsis == "" || synopsis.length > 1000) {
        synopsisElt.style.borderColor = "red";
        alert("Veuillez ajouter un synopsis maximum 1000 caractères");
        return false;
    }
    if (movie_image == "") {
        movie_imageElt.style.borderColor = "red";
        alert("Veuillez ajouter une image");
        return false;
    }
    if (trailer == "" || trailer.length > 300) {
        dateSortieElt.style.borderColor = "red";
        alert("Veuillez ajouter un trailer (intégration youtube) maximum 300 caractères");
        return false;
    }

}
