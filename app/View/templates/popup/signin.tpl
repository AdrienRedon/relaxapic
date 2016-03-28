<form class="signin__popup hidden" method="POST" action="{WEBROOT}signin">
    
    <div>
        <label for="signin_mail">
            Adresse mail
        </label>
        <input type="email" name="mail" id="signin_mail" />
    </div>
    <div>
        <label for="signin_password">
            Mot de passe
        </label>
        <input type="password" name="password" id="signin_password" />
    </div>
    <div>
        <label for="signin_password_confirm">
            Confirmer le mot de passe
        </label>
        <input type="password" name="password_confirm" id="signin_password_confirm" />
    </div>

    <button class="cancel__button">Annuler</button>
    <button type="submit" class="signin__button">S'inscrire</button>

</form>