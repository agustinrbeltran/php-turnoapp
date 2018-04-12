<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 09:01:55
         compiled from "application\views\administradorSucursalPage\tabla_sucursales.tpl" */ ?>
<?php /*%%SmartyHeaderCode:502653ca17e3c06015-24919003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f150cf99bb4f5bdc26e64fdce253b374185e1093' => 
    array (
      0 => 'application\\views\\administradorSucursalPage\\tabla_sucursales.tpl',
      1 => 1405734063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '502653ca17e3c06015-24919003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sucursales' => 0,
    'root' => 0,
    'sucursal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca17e3c25424_14077190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca17e3c25424_14077190')) {function content_53ca17e3c25424_14077190($_smarty_tpl) {?>

<table class="table table-bordered table-hover">

    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre de Sucursal</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th></th>
    </tr>
    </thead>
    <tbody>

    <?php  $_smarty_tpl->tpl_vars['sucursal'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sucursal']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sucursales']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sucursal']->key => $_smarty_tpl->tpl_vars['sucursal']->value) {
$_smarty_tpl->tpl_vars['sucursal']->_loop = true;
?>

        <tr>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/usuarios/<?php echo $_smarty_tpl->tpl_vars['sucursal']->value->getId();?>
">
                    <?php echo $_smarty_tpl->tpl_vars['sucursal']->value->getId();?>

                </a>
            </td>

            <td><?php echo $_smarty_tpl->tpl_vars['sucursal']->value->getNombre();?>
</td>

            <td><?php echo $_smarty_tpl->tpl_vars['sucursal']->value->getDireccion();?>
</td>

            <td><?php echo $_smarty_tpl->tpl_vars['sucursal']->value->getCiudad();?>
</td>

            <td class="text-right">

                <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/borrarsucursal/<?php echo $_smarty_tpl->tpl_vars['sucursal']->value->getId();?>
" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>

            </td>
        </tr>

    <?php } ?>

    </tbody>
</table><?php }} ?>
