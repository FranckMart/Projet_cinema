<!-- Modal -->
<div class="modal fade" id="decoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="decoModalTitle"> <?php
                        if (!empty($_SESSION) && $_SESSION['user']->user_droit >= 0) {

                            echo $_SESSION['user']->user_pseudo;
                        }

                        ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <p style="font-size: 20px;">Bienvenu sur MovieDvice</p>
            </div>
            <div class="modal-footer">
            <form class="formModal" method="POST" action="index.php">
                    <div class="form-group form-group-modal">
                        <br>
                        <input type="submit" class="btn btn-primary btn-modal" name="deco" value="Se déconnecter"></input>
                    </div>
                </form>
                <button type="button" class="btn btn-secondary btn-close-modal btn_fermer" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

