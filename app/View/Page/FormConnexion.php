<html>

    <head>
    
        <title>Formulaire de connexion</title>
    
    </head>
    
    <body>
    
        <form action="<?= WEBROOT ?>/login" method="post">
        
            <table>
            
            <tr>
            
            <td><label for="login"><strong>Nom de compte :</strong></label></td>
            <td><input type="text" name="login" id="login"/></td>
            
            </tr>
            
            <tr>
            
            <td><label for="pass"><strong>Mot de passe :</strong></label></td>
            <td><input type="password" name="pass" id="pass"/></td>
            
            </tr>
            
            </table>

        <input type="submit" name="inscription" value="Inscription"/>

        <input type="submit" name="connection" value="Se connecter"/>
        
        </form>
    
    </body>

</html>