<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 04:29:21
         compiled from "application\views\templates\administradorUsuarioSucursalPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1250453c9d8019a30d4-30455341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dd8fe0155adabb017c3f113f9e32c129b571e03' => 
    array (
      0 => 'application\\views\\templates\\administradorUsuarioSucursalPage.tpl',
      1 => 1405369583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1250453c9d8019a30d4-30455341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nombre_sucursal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c9d8019ed465_43333276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c9d8019ed465_43333276')) {function content_53c9d8019ed465_43333276($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("common/common_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body class="glossed">

<div class="all-wrapper fixed-header left-menu">

    <?php echo $_smarty_tpl->getSubTemplate ("common/common_barra_superior.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("administradorUsuarioSucursalPage/barra_lateral_interna_usuarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="main-content">

        <div class="widget widget-blue">

            <div class="widget-title">

                <?php echo $_smarty_tpl->getSubTemplate ("common/common_widget_controls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <h3><i class="fa fa-table"></i> Usuarios de <?php echo $_smarty_tpl->tpl_vars['nombre_sucursal']->value;?>
 </h3>

            </div>


            <div class="widget-content">

                <div class="table-responsive">
                    <?php echo $_smarty_tpl->getSubTemplate ("administradorUsuarioSucursalPage/tabla_usuarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>

            </div>
        </div>

        <div class="widget widget-blue">
            <div class="widget-title">

                <?php echo $_smarty_tpl->getSubTemplate ('common/common_widget_controls.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <h3><i class="fa fa-ok-circle"></i> Cree un usuario sucursal </h3>
            </div>
            <div class="widget-content">

                <?php echo $_smarty_tpl->getSubTemplate ("administradorUsuarioSucursalPage/usuario_sucursal_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            </div>
        </div>

    </div>
</div>


</body>

</html><?php }} ?>
