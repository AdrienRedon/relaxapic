<?php
/* Smarty version 3.1.29, created on 2016-03-24 17:26:53
  from "/Applications/MAMP/htdocs/relaxapic/app/View/templates/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f4154d73a578_72731914',
  'file_dependency' => 
  array (
    'b620be263a677ad3820a6c39a58a8a948bfce594' => 
    array (
      0 => '/Applications/MAMP/htdocs/relaxapic/app/View/templates/header.tpl',
      1 => 1458836804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f4154d73a578_72731914 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '101636671456f4154d69e8b3_43694680';
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
