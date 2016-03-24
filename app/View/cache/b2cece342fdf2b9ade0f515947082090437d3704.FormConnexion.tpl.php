<?php
/* Smarty version 3.1.29, created on 2016-03-24 17:46:59
  from "/Applications/MAMP/htdocs/relaxapic/app/View/Page/FormConnexion.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f41a0352f053_22745162',
  'file_dependency' => 
  array (
    'b2cece342fdf2b9ade0f515947082090437d3704' => 
    array (
      0 => '/Applications/MAMP/htdocs/relaxapic/app/View/Page/FormConnexion.tpl',
      1 => 1458833838,
      2 => 'file',
    ),
    'b620be263a677ad3820a6c39a58a8a948bfce594' => 
    array (
      0 => '/Applications/MAMP/htdocs/relaxapic/app/View/templates/header.tpl',
      1 => 1458836804,
      2 => 'file',
    ),
    'cca9221a288b140bc7933f1850ed42ab167da646' => 
    array (
      0 => '/Applications/MAMP/htdocs/relaxapic/app/View/templates/footer.tpl',
      1 => 1458828539,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_56f41a0352f053_22745162 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Relaxapic login</title>
        <link rel="stylesheet" type="text/css" href="/relaxapic/public/css/app.css">
    </head>
    <body>
        <header>
            <img class="header__logo" src="/relaxapic/public/img/relaxapic_logo.png" alt="Relaxapic logo" height="75" width="75">
            <h1 class="header__title">
                RELAXAPIC
            </h1>
            <div class="header__login">
                Se connecter
            </div>
        </header>
    


    
        <form action="/relaxapic/public/login" method="post">
            
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
