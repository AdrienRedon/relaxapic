<div class="signin__popup hidden" aria-labelledby="signin__button" role="dialog">
    <form method="POST" action="{WEBROOT}signin">
        
        <div>
            <label for="signin_mail">
                Adresse mail
            </label>
            <input type="email" name="mail" id="signin_mail" />
            <p class="mail__errors"></p>
        </div>
        <div>
            <label for="signin_password">
                Mot de passe
            </label>
            <input type="password" name="password" id="signin_password" />
            <p class="password__errors"></p>
        </div>
        <div>
            <label for="signin_password_confirm">
                Confirmer le mot de passe
            </label>
            <input type="password" name="password_confirm" id="signin_password_confirm" />
            <p class="password_confirm__errors"></p>
        </div>

        <button class="cancel__button">Annuler</button>
        <button type="submit" class="signin__button submit__button">S'inscrire</button>

    </form>
</div> 