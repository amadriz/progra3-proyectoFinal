<?php
/* Smarty version 4.3.1, created on 2023-06-22 03:09:11
  from 'C:\wamp64\www\semana6_Calculadora_Smarty\view\templates\respuesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6493bb57db8013_59547916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18041c3a8033ccb9ef6f7dddd5954221924ef5cc' => 
    array (
      0 => 'C:\\wamp64\\www\\semana6_Calculadora_Smarty\\view\\templates\\respuesta.tpl',
      1 => 1687400491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6493bb57db8013_59547916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Resultado</h1>
<h1>El total de <?php echo $_smarty_tpl->tpl_vars['val1']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['operacion']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['val2']->value;?>
 = <?php echo $_smarty_tpl->tpl_vars['resultado']->value;?>
<h1>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
