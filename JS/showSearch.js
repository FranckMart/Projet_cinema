
// Au chargement de la page
$(document).ready(function(){
  // On créer un évenment clavier sur la barre de recherche 
  $("#suggest").keyup(function() {
   // $(".dropdown-child-form").css("display","block");
   // Ici in recupère la valeur get depuis le fichier PHP 
   /*

                                    |         |             |
                               Input_name  récupère    done permet 
                                            valeur     de récupérer
                                                      plusieurs valeurs 
   */
    $.get("include/suggest.php", {search: $(this).val()}).done(function(data){
      // Je retourne les valeur (trouvé) *data*
      console.log(data)
      // à chaque sortie de la barre de recherche de vide les données
      $("datalist").empty();
      // J'affiche les données
      $("datalist").html(data);

    });
  });
});
