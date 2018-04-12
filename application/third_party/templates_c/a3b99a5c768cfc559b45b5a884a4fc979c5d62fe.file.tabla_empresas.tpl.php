<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 07:56:11
         compiled from "application\views\administradorEmpresasPage\tabla_empresas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2821553ca087bb444f6-23229082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3b99a5c768cfc559b45b5a884a4fc979c5d62fe' => 
    array (
      0 => 'application\\views\\administradorEmpresasPage\\tabla_empresas.tpl',
      1 => 1405734063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2821553ca087bb444f6-23229082',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'empresas' => 0,
    'root' => 0,
    'empresa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca087bb638f9_62746354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca087bb638f9_62746354')) {function content_53ca087bb638f9_62746354($_smarty_tpl) {?><table class="table table-bordered table-hover">
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
