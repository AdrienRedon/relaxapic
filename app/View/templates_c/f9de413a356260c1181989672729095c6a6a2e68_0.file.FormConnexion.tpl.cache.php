<?php
/* Smarty version 3.1.29, created on 2016-03-24 14:05:18
  from "/Users/adrien/Sites/relaxapic/app/View/Page/FormConnexion.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f3e60e373ab1_30780578',
  'file_dependency' => 
  array (
    'f9de413a356260c1181989672729095c6a6a2e68' => 
    array (
      0 => '/Users/adrien/Sites/relaxapic/app/View/Page/FormConnexion.tpl',
      1 => 1458824701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_56f3e60e373ab1_30780578 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '147554299256f3e60e3472e8_36020557';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'form'), 0, false);
?>

    
        <form action="<?php echo WEBROOT;?>
login" method="post">
        
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
    
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
