<!-- Modal -->
<div class="modal fade" id="decoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="decoModalTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="formModal" method="POST" action="login.php">
                    <div class="form-group form-group-modal">

                        <?php
                        if (!empty($_SESSION) && $_SESSION['user']->user_droit >= 0) {

                            echo $_SESSION['user']->user_pseudo;
                        }

                        ?>
                    </div>

                    <div class="form-group form-group-modal">
                        <br>
                        <input type="submit" class="btn btn-primary btn-modal" name="deco" value="Se déconnecter"></input>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close-modal" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

