<?php
/* Smarty version 3.1.29, created on 2016-03-24 18:35:05
  from "/Users/adrien/Sites/relaxapic/app/View/Page/FormConnexion.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f42549c70649_17228330',
  'file_dependency' => 
  array (
    'f9de413a356260c1181989672729095c6a6a2e68' => 
    array (
      0 => '/Users/adrien/Sites/relaxapic/app/View/Page/FormConnexion.tpl',
      1 => 1458840075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_56f42549c70649_17228330 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '69263745656f42549beba72_46125627';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"login"), 0, false);
?>

    
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
