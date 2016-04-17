<form class="login__popup hidden" method="POST" action="{WEBROOT}login">
    
    <div>
        <label for="login_mail">
            Adresse mail
        </label>
        <input type="email" name="mail" id="login_mail" />
        <p class="mail__errors"></p>
    </div>

    <div>
        <label for="login_password">
            Mot de passe
        </label>
        <input type="password" name="password" id="login_password" />
        <p class="password__errors"></p>
    </div>

    <button class="cancel__button">Annuler</button>
    <button type="submit" class="login__button">Se connecter</button>
    <p class="login__failed"></p>

</form>