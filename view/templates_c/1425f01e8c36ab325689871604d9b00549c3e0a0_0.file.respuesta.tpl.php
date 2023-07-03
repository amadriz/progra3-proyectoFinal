<?php
/* Smarty version 4.3.1, created on 2023-06-22 02:57:11
  from 'C:\wamp64\www\semana6_profe\view\templates\respuesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6493b887b894c2_95310991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1425f01e8c36ab325689871604d9b00549c3e0a0' => 
    array (
      0 => 'C:\\wamp64\\www\\semana6_profe\\view\\templates\\respuesta.tpl',
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
function content_6493b887b894c2_95310991 (Smarty_Internal_Template $_smarty_tpl) {
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
