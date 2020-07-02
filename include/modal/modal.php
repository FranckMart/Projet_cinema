<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="formModal" method="POST" action="login.php">
                    <div class="form-group form-group-modal">
                        <label for="user_mail">Email</label>
                        <input type="email" class="form-control" id="user_mail" name="user_mail" required="">
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="user_password">Mot de passe</label>
                        <input type="password" class="form-control" id="user_password" name="user_password" required="">
                    </div>
                    
                    <div class="form-group form-group-modal">
                        <br>
                        <button type="submit" class="btn btn-primary btn-modal">Se connecter</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <a href="inscription.php" class="btn btn-secondary btn-news-account">Créer un compte </a>
                <button type="button" class="btn btn-secondary btn-close-modal" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>