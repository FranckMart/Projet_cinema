<!-- Je créer un modal qui apparaitra lors du clique sur le bouton 'Ajouter une news' il contient toutes les données nécessaires à la création d'une news-->
<!-- Modal -->
<div class="modal fade" id="news_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="formModal" method="POST" id="formElt" action="include/addNews.php" enctype="multipart/form-data"  onsubmit="return validateFormNews()">
          <div class="form-group form-group-modal">
            <label for="titre_presentation">Titre Présentation</label>
            <input type="text" class="form-control" id="titre_presentation" name="news_titrePresentation">
          </div>
          <div class="form-group form-group-modal">
            <label for="news_micro">Micro description</label>
            <input type="text" class="form-control" id="news_micro" name="news_micro">
          </div>
          <div class="form-group form-group-modal">
            <label for="news_textPresentation">Texte Présentation</label>
            <input type="text" class="form-control" id="news_textPresentation" name="news_textPresentation">
          </div>
          <div class="form-group form-group-modal">
            <label for="news_titreContenu">Titre contenu</label>
            <input type="text" class="form-control" id="news_titreContenu" name="news_titreContenu">
          </div>
          <div class="form-group form-group-modal">
            <label for="news_textContenu">Texte Contenu</label>
            <input type="text" class="form-control" id="news_textContenu" name="news_textContenu">
          </div>
          <div class="form-group form-group-modal">
            <label for="news_titreConclusion">Titre conclusion</label>
            <input type="text" class="form-control" id="news_titreConclusion" name="news_titreConclusion">
          </div>
          <div class="form-group form-group-modal">
            <label for="news_textConclusion">Texte conclusion</label>
            <input type="text" class="form-control" id="news_textConclusion" name="news_textConclusion" rows="5" cols="33">
          </div>
          <div class="form-group form-group-modal">
            <label for="news_editeur">Editeur</label>
            <input type="text" class="form-control" id="news_editeur" name="news_editeur">
          </div>
          <div class="form-group form-group-modal">
          <label for="news_image">Insérer une image :</label>
          <input type="file" id="news_image" name="news_image">
          </div>
          
          <div class="form-group form-group-modal">
            <br>
            <button type="submit" class="btn btn-primary btn-modal" name="btn_value">Intégrer</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>