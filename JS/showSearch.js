$(document).ready(function () {

  // On créer un évenement clavier sur la barre de recherche 
  $("#suggest").keyup(function () {

    // Je recupère la veleur de l'inuput 
    $requete = $("#suggest").val();

    //j'appel la page api.php et je vérifie sur la requette est bien envoyé au format JSON
    console.log("api.php?requete=" + $requete);

    // Je retourne une liste de resultats grâce à l'AJAX (data correspond aux resultats de la requete GET)
    $.get("api.php?requete=" + $requete).done(function (data) {
    console.log(data)
      // Je vide les resultats de l'élément datalist 
      $("#test").html("");

      // Je parcours mon tableau d'objet et je récupère les données utiles à l'affichage des films 
      $.each(data, function () {

        $("#test").append("<a href='media_inside.php?video_id=" + this.video_id + "'><p>" + this.video_titre + "</p></a>");
        //$(".lien").attr("href", "media_inside.php?video_id=" + this.video_id);


      });
    })
  })
/*
  // Test 
  $("#mySuggest").click(function () {

    console.log("okay")
    $(".lien").attr("href", "media_inside.php?video_id=" + this.video_id);

  })
*/
})



/*
// Au chargement de la page
$(document).ready(function(){
  // On créer un évenment clavier sur la barre de recherche 
  $("#suggest").keyup(function() {
   // Ici in recupère la valeur get depuis le fichier PHP 
   /*

                                    |         |             |
                               Recherche  récupère    done permet 
                                    à   ->  valeur    de récupérer
                                partir de           plusieurs valeurs 
   
    $.get("include/suggest.php", {search: $(this).val()}).done(function(data){
      // Je retourne les valeurs (trouvé) *data*
      // Exemple <option value='Collateral'></option> 
      console.log(data)
      // à chaque sortie de la barre de recherche je vide les données
      $("datalist").empty();
      // J'affiche les données
      $("datalist").html(data);

    });
  });
})
*/