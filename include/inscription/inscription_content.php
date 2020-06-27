<div id="bloc_global">
    <div id="title_content">
        <h2>Rejoignez l'aventure</h2>
    </div>
    <div id="formulaire_content">
        <!-- création d'un formulaire avec une methode POST ce qui me permet de récupérer les 
        information lors de l'envoie du formulaire --> 
        <form method="POST" action="include/inscription/inscription_insert.php">
            <div class="container">
                <div class="form-group">
                    <!-- Création d'un champ input mail (sécurisé) car la validation ce fera 
                    essentielment si la données rentré sera un mail -->
                    <label for="user_mail">Email</label>
                    <input type="email" class="form-control" id="user_mail" aria-describedby="emailHelp" name="user_mail" required>
                </div>
                <div class="form-group">
                     <!-- Création d'un champ input text pour récupérer le pseudo de l'utilisateur -->
                    <label for="user_pseudo">Pseudo</label>
                    <input type="text" class="form-control" id="user_pseudo" aria-describedby="emailHelp" name="user_pseudo" required>
                </div>
                <div class="form-group">
                      <!-- Création d'un champ input password pour récupérer le mdp de l'utilisateur  -->
                    <label for="user_password">Mot de passe</label>
                    <input type="password" class="form-control" id="user_password" name="user_password" required>
                </div>
                <div class="form-group">
                    <!-- Création d'un champ input date pour récupérer la date de naissance de l'utilisateur  -->
                    <label for="user_born">Date de naissance</label>
                    <input type="date" class="form-control" id="user_born" name="user_born">
                </div>
                <div class="btn_content">
                      <!-- Bouton d'envoie du formulaire  -->
                    <button type="submit" class="btn btn-primary btn-submit">Valider</button>
                </div>
            </div>
        </form>
    </div>
</div>