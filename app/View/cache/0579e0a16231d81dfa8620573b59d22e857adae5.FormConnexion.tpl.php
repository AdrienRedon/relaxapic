<?php
/* Smarty version 3.1.29, created on 2016-03-24 16:59:05
  from "C:\wamp\www\relaxapic\app\View\Page\FormConnexion.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f40ec9d9e349_33835177',
  'file_dependency' => 
  array (
    '0579e0a16231d81dfa8620573b59d22e857adae5' => 
    array (
      0 => 'C:\\wamp\\www\\relaxapic\\app\\View\\Page\\FormConnexion.tpl',
      1 => 1458835136,
      2 => 'file',
    ),
    '28cc59cebf145b5eebe28dc4a4cd05a9e0f53f2a' => 
    array (
      0 => 'C:\\wamp\\www\\relaxapic\\app\\View\\templates\\header.tpl',
      1 => 1458825712,
      2 => 'file',
    ),
    'a4ccba4831b1d40bbb1797488cc319c27f38f1d3' => 
    array (
      0 => 'C:\\wamp\\www\\relaxapic\\app\\View\\templates\\footer.tpl',
      1 => 1458825712,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_56f40ec9d9e349_33835177 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Relaxapic login</title>
    </head>
    <body>


    <link rel="stylesheet" type="text/css" href="source/page.css" media="all"/>
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
