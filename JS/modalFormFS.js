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


// Récupération des éléments requis au bon fonctionnement de la BDD 
const  titreElt = document.getElementById("titre");
const  mediaElt = document.getElementById("media");
const  realisateurElt = document.getElementById("realisateur_nom");
const  acteurPrincipalElt = document.getElementById("acteurPrincipal");
const  originElt = document.getElementById("origine")
const  castingElt = document.getElementById("casting");
const  dureeElt = document.getElementById("duree");
const  noteElt = document.getElementById("note");
const  dateSortieElt = document.getElementById("dateSortie");
const  synopsisElt = document.getElementById("synopsis");
const  movie_imageElt = document.getElementById("movie_image");
const  trailerElt = document.getElementById("trailer");

// Fonction qui me permet de vérifier les valeurs d'entrées 
function validateForm() {
    // Récupération des valeurs des champs input voulus
    const  titre = document.forms["formElt"]["titre"].value;
    const  media = document.forms["formElt"]["media"].value;;
    const  realisateur = document.forms["formElt"]["realisateur_nom"].value;
    const  acteurPrincipal = document.forms["formElt"]["acteurPrincipal"].value;
    const  origin = document.forms["formElt"]["origine"].value
    const  casting = document.forms["formElt"]["casting"].value;
    const  duree = document.forms["formElt"]["duree"].value;
    const  note = document.forms["formElt"]["note"].value;
    const  dateSortie = document.forms["formElt"]["dateSortie"].value;
    const  synopsis = document.forms["formElt"]["synopsis"].value;
    const  movie_image = document.forms["formElt"]["movie_image"].value;
    const  trailer = document.forms["formElt"]["trailer"].value;


    /* Condition de vérification de la valeur du champ input ou du nombre de caractères que contient le champ 
    Si le champ n'est pas valide alors on alerte l'utilisateur et on n'envoie pas le formulaire
    et change également la bordure de l'input */
    if (titre == "" || titre.length > 100) {
        titreElt.style.borderColor = "red";
        alert("Veuillez ajouter un titre inférieur à 100 caractères");
        return false;
    }
    if (media == "" || media.length > 10 ) {
        mediaElt.style.borderColor = "red";
        alert("Veuillez ajouter un type de média film ou série");
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
