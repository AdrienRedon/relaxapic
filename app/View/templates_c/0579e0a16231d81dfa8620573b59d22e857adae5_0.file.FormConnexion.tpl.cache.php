<?php
/* Smarty version 3.1.29, created on 2016-03-24 16:59:05
  from "C:\wamp\www\relaxapic\app\View\Page\FormConnexion.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f40ec9c09344_94678725',
  'file_dependency' => 
  array (
    '0579e0a16231d81dfa8620573b59d22e857adae5' => 
    array (
      0 => 'C:\\wamp\\www\\relaxapic\\app\\View\\Page\\FormConnexion.tpl',
      1 => 1458835136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_56f40ec9c09344_94678725 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1382856f40ec973f250_80519265';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'login'), 0, false);
?>

    <link rel="stylesheet" type="text/css" href="source/page.css" media="all"/>
        <form action="<?php echo WEBROOT;?>
login" method="post">
            
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
    
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
