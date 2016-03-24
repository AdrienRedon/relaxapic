<?php
/* Smarty version 3.1.29, created on 2016-03-24 14:05:18
  from "/Users/adrien/Sites/relaxapic/app/View/Page/FormConnexion.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f3e60e389eb0_79001466',
  'file_dependency' => 
  array (
    'f9de413a356260c1181989672729095c6a6a2e68' => 
    array (
      0 => '/Users/adrien/Sites/relaxapic/app/View/Page/FormConnexion.tpl',
      1 => 1458824701,
      2 => 'file',
    ),
    '4b7648646f04df91bb09b39fbb419286d7f23b03' => 
    array (
      0 => '/Users/adrien/Sites/relaxapic/app/View/templates/header.tpl',
      1 => 1458824715,
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
function content_56f3e60e389eb0_79001466 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Relaxapic form</title>
    </head>
    <body>


    
        <form action="/public/login" method="post">
        
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
</html><?php }
}
