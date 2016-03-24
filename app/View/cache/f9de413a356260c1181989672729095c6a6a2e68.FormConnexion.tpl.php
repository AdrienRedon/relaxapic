<?php
/* Smarty version 3.1.29, created on 2016-03-24 18:35:46
  from "/Users/adrien/Sites/relaxapic/app/View/Page/FormConnexion.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f42572913c44_69456038',
  'file_dependency' => 
  array (
    'f9de413a356260c1181989672729095c6a6a2e68' => 
    array (
      0 => '/Users/adrien/Sites/relaxapic/app/View/Page/FormConnexion.tpl',
      1 => 1458840075,
      2 => 'file',
    ),
    '4b7648646f04df91bb09b39fbb419286d7f23b03' => 
    array (
      0 => '/Users/adrien/Sites/relaxapic/app/View/templates/header.tpl',
      1 => 1458840945,
      2 => 'file',
    ),
    '6309eee90cb78b45bf59bf954f19df6caa8d132a' => 
    array (
      0 => '/Users/adrien/Sites/relaxapic/app/View/templates/footer.tpl',
      1 => 1458823743,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_56f42572913c44_69456038 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Relaxapic login</title>
        <link rel="stylesheet" type="text/css" href="/public/css/app.css">
    </head>
    <body>
        <header>
            <img class="header__logo" src="/public/img/relaxapic_logo.png" alt="Relaxapic logo" height="75" width="75">
            <h1 class="header__title">
                RELAXAPIC
            </h1>
            <div class="header__login">
                Se connecter
            </div>
        </header>
    


    
        <form action="/public/login" method="post">
            
            <p>
                <label for="login">Nom de compte : </label>
                <input type="text" name="login" id="login"/>
            </p>
            
            <p>
                <label for="pass"><strong>Mot de passe :</strong></label>
                <input type="password" name="pass" id="pass"/>
            </p>

            <input type="submit" name="inscription" value="Inscription"/>

            <input type="submit" name="connection" value="Se connecter"/>
        
        </form>
    

    </body>
</html><?php }
}
