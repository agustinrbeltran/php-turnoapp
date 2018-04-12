<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 07:56:11
         compiled from "application\views\administradorEmpresasPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164253ca087bac3654-85088558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b00c3ccc861de139344a76e6bf4ed073d893317e' => 
    array (
      0 => 'application\\views\\administradorEmpresasPage.tpl',
      1 => 1405369583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164253ca087bac3654-85088558',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca087bb01e66_58266083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca087bb01e66_58266083')) {function content_53ca087bb01e66_58266083($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("common/common_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body class="glossed">

<div class="all-wrapper fixed-header left-menu">

    <?php echo $_smarty_tpl->getSubTemplate ("common/common_barra_superior.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("administradorEmpresasPage/barra_lateral_interna_empresa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="main-content">

        <div class="widget widget-red">

            <div class="widget-title">

                <?php echo $_smarty_tpl->getSubTemplate ("common/common_widget_controls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <h3><i class="fa fa-table"></i> Empresas </h3>

            </div>


            <div class="widget-content">

                <div class="table-responsive">
                    <?php echo $_smarty_tpl->getSubTemplate ("administradorEmpresasPage/tabla_empresas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>

            </div>

        </div>


        <div class="widget widget-red">
            <div class="widget-title">

                <?php echo $_smarty_tpl->getSubTemplate ('common/common_widget_controls.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <h3><i class="fa fa-ok-circle"></i> Cree una empresa </h3>
            </div>
            <div class="widget-content">

                <?php echo $_smarty_tpl->getSubTemplate ("administradorEmpresasPage/empresa_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            </div>
        </div>


    </div>
</div>

</body>

</html><?php }} ?>
