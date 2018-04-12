<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 03:41:10
         compiled from "application\views\templates\administradorEmpresasPage\tabla_empresas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299853c971b92fba71-36801892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '832f8a38cfdba8ef41e84040ec5d2125d1e8d559' => 
    array (
      0 => 'application\\views\\templates\\administradorEmpresasPage\\tabla_empresas.tpl',
      1 => 1405734063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299853c971b92fba71-36801892',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c971b9351991_38348737',
  'variables' => 
  array (
    'empresas' => 0,
    'root' => 0,
    'empresa' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c971b9351991_38348737')) {function content_53c971b9351991_38348737($_smarty_tpl) {?><table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre de Empresa</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['empresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['empresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['empresas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->key => $_smarty_tpl->tpl_vars['empresa']->value) {
$_smarty_tpl->tpl_vars['empresa']->_loop = true;
?>
    <tr>

        <td>
            <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/sucursales/<?php echo $_smarty_tpl->tpl_vars['empresa']->value->getId();?>
" >
                <?php echo $_smarty_tpl->tpl_vars['empresa']->value->getId();?>

            </a>
        </td>

        <td><?php echo $_smarty_tpl->tpl_vars['empresa']->value->getNombre();?>
</td>

        <td class="text-right">
            <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/borrarempresa/<?php echo $_smarty_tpl->tpl_vars['empresa']->value->getId();?>
" class="btn btn-danger btn-xs">
                <i class="fa fa-times"></i>
            </a>
        </td>

    </tr>
    <?php } ?>

    </tbody>
</table><?php }} ?>
