<?php
/* Smarty version 4.3.1, created on 2023-06-29 03:19:57
  from 'C:\wamp64\www\semana7\view\templates\frm_calculadora.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649cf85d376e79_99271605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bc0ce99b54b95fe21315ac1c3124efd9e8ba04e' => 
    array (
      0 => 'C:\\wamp64\\www\\semana7\\view\\templates\\frm_calculadora.tpl',
      1 => 1687404717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_649cf85d376e79_99271605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="index.php" method="post">
<input type="hidden" name="accion" value="calcular">
<table border="0">

        <tr>
            <td>Valor 1</td>
            <td><input type="number" name="n_val1"></td>
        </tr>
        <tr>
            <td>Operador</td>
            <td>
                <select name="cbo_operador">
                    <option value="mas"> +</option>
                    <option value="menos">- </option>
                    <option value="multi"> *</option>
                    <option value="div"> /</option>
                </select>    
                
            </td>
        </tr>
        <tr>
            <td>Valor 2</td>
            <td><input type="number" name="n_val2"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Calcular"></td>
            
        </tr>
   
</table>
</form>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
