<?php
/* Smarty version 3.1.29, created on 2016-03-24 13:46:51
  from "/Users/adrien/Sites/relaxapic/app/View/Page/admin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f3e1bbb82ea2_08960918',
  'file_dependency' => 
  array (
    '30166c77cbc374c51bc214dcb7c5bf4500030296' => 
    array (
      0 => '/Users/adrien/Sites/relaxapic/app/View/Page/admin.tpl',
      1 => 1458823608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f3e1bbb82ea2_08960918 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '76622578256f3e1bbb5b5c6_12978329';
?>
<html>
  <head>
    <title>Smarty</title>
  </head>
  <body>
    Hello World! <br>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
 <br>
    webroot is: <?php echo WEBROOT;?>

  </body>
</html><?php }
}
