<div id="bloc_global">
    <div id="title_content">
        <h2>Rejoignez l'aventure</h2>
    </div>
    <div id="formulaire_content">
        <form method="POST" action="include/inscription/inscription_insert.php">
            <div class="container">
                <div class="form-group">
                    <label for="user_mail">Email</label>
                    <input type="email" class="form-control" id="user_mail" aria-describedby="emailHelp" name="user_mail">
                </div>
                <div class="form-group">
                    <label for="user_pseudo">Pseudo</label>
                    <input type="text" class="form-control" id="user_pseudo" aria-describedby="emailHelp" name="user_pseudo">
                </div>
                <div class="form-group">
                    <label for="user_password">Mot de passe</label>
                    <input type="password" class="form-control" id="user_password" name="user_password">
                </div>
                <div class="form-group">
                    <label for="user_born">Date de naissance</label>
                    <input type="date" class="form-control" id="user_born" name="user_born">
                </div>
                <div class="btn_content">
                    <button type="submit" class="btn btn-primary btn-submit">Valider</button>
                </div>
            </div>
        </form>
    </div>
</div>