<form class="login__popup hidden" method="POST" action="{WEBROOT}login">
    
    <div>
        <label for="login_mail">
            Adresse mail
        </label>
        <input type="mail" name="mail" id="login_mail" />
    </div>
    <div>
        <label for="login_password">
            Mot de passe
        </label>
        <input type="password" name="password" id="login_password" />
    </div>

    <button class="cancel__button">Annuler</button>
    <button type="submit" class="login__button">Connexion</button>

</form>