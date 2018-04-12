<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 09:13:28
         compiled from "application\views\administradorUsuarioSucursalPage\tabla_usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1841453ca1a9813e9e0-70634419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '578da0ab1af852f1cd17cf7d8a5fd02c52847a65' => 
    array (
      0 => 'application\\views\\administradorUsuarioSucursalPage\\tabla_usuarios.tpl',
      1 => 1405737063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1841453ca1a9813e9e0-70634419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuarios' => 0,
    'usuario' => 0,
    'root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca1a9815ddf5_16734750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca1a9815ddf5_16734750')) {function content_53ca1a9815ddf5_16734750($_smarty_tpl) {?><table class="table table-bordered table-hover datatable">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre de Usuario</th>
        <th>Apellido</th>
        <th>Mail</th>
        <th>Username</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getId();?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNombre();?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getApellido();?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getEmail();?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getUsername();?>
</td>
            <td class="text-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/borrarusuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getId();?>
" class="btn btn-danger btn-xs remove-tr"><i class="fa fa-times"></i></a>
            </td>
        </tr>
    <?php } ?>

    </tbody>
</table><?php }} ?>
