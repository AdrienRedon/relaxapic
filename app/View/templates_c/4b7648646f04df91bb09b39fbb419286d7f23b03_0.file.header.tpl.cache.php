<?php
/* Smarty version 3.1.29, created on 2016-03-24 18:35:46
  from "/Users/adrien/Sites/relaxapic/app/View/templates/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f42572902879_13576443',
  'file_dependency' => 
  array (
    '4b7648646f04df91bb09b39fbb419286d7f23b03' => 
    array (
      0 => '/Users/adrien/Sites/relaxapic/app/View/templates/header.tpl',
      1 => 1458840945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f42572902879_13576443 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12723979556f425728c0b78_92451312';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Relaxapic <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link rel="stylesheet" type="text/css" href="<?php echo WEBROOT;?>
css/app.css">
    </head>
    <body>
        <header>
            <img class="header__logo" src="<?php echo WEBROOT;?>
img/relaxapic_logo.png" alt="Relaxapic logo" height="75" width="75">
            <h1 class="header__title">
                RELAXAPIC
            </h1>
            <div class="header__login">
                Se connecter
            </div>
        </header>
    

<?php }
}
