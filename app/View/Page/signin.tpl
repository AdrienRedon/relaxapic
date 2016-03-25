{include file="templates/header.tpl" title=login}
    
        <form action="index.php" method="post">
        
            <p>
            
            <label for="login">Nom de compte :</label>
            <input type="text" name="login" id="login"/>
            
            </p>
            
            <p>
            
            <label for="pass"><strong>Mot de passe :</strong></label>
            <input type="password" name="pass" id="pass"/></td>
            
            </p>
            
            <p>
            
            <label for="pass2"><strong>Confirmez le mot de passe :</strong></label>
            <input type="password" name="pass_confirm" id="pass_confirm"/>

            </p>
        
        <input type="submit" name="register" value="S'inscrire"/>
        
        </form>
    
{include file="templates/footer.tpl"}