<?php /* Smarty version Smarty-3.1.19, created on 2014-07-18 22:40:42
         compiled from "application\views\templates\administradorSucursalPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2911153c9864a33e9d9-95166307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '405f7f4e9aba92ee7c0ed5cc2ffefb2c2b5f02ad' => 
    array (
      0 => 'application\\views\\templates\\administradorSucursalPage.tpl',
      1 => 1405369583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2911153c9864a33e9d9-95166307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nombre_empresa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c9864a4add37_27799893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c9864a4add37_27799893')) {function content_53c9864a4add37_27799893($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("common/common_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body class="glossed">

<div class="all-wrapper fixed-header left-menu">

    <?php echo $_smarty_tpl->getSubTemplate ("common/common_barra_superior.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("administradorSucursalPage/barra_lateral_interna_sucursal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="main-content">

        <div class="widget widget-green">

            <div class="widget-title">

                <?php echo $_smarty_tpl->getSubTemplate ("common/common_widget_controls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <h3><i class="fa fa-table"></i> Sucursales de <?php echo $_smarty_tpl->tpl_vars['nombre_empresa']->value;?>
 </h3>

            </div>


            <div class="widget-content">

                <div class="table-responsive">
                    <?php echo $_smarty_tpl->getSubTemplate ("administradorSucursalPage/tabla_sucursales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>

            </div>
        </div>

        <div class="widget widget-green">
            <div class="widget-title">

                <?php echo $_smarty_tpl->getSubTemplate ('common/common_widget_controls.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <h3><i class="fa fa-ok-circle"></i> Cree una sucursal </h3>
            </div>
            <div class="widget-content">

                <?php echo $_smarty_tpl->getSubTemplate ("administradorSucursalPage/sucursal_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            </div>
        </div>

    </div>
</div>


</body>

</html><?php }} ?>
