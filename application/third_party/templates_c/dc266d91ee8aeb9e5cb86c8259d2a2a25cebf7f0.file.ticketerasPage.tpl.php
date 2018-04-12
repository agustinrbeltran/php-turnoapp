<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 10:58:06
         compiled from "application\views\ticketerasPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1718053ca331e60d792-49469105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc266d91ee8aeb9e5cb86c8259d2a2a25cebf7f0' => 
    array (
      0 => 'application\\views\\ticketerasPage.tpl',
      1 => 1405760148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1718053ca331e60d792-49469105',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca331e648120_59466655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca331e648120_59466655')) {function content_53ca331e648120_59466655($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("common/common_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body class="glossed">

<div class="all-wrapper fixed-header left-menu">

    <?php echo $_smarty_tpl->getSubTemplate ("common/common_barra_superior.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("ticketerasPage/barra_lateral_interna_ticketera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="main-content">

        <div class="widget widget-red">

            <div class="widget-title">

                <?php echo $_smarty_tpl->getSubTemplate ("common/common_widget_controls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <h3><i class="fa fa-table"></i> Ticketeras </h3>

            </div>


            <div class="widget-content">

                <div class="table-responsive">
                    <?php echo $_smarty_tpl->getSubTemplate ("ticketerasPage/tabla_ticketera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>

            </div>

        </div>


        <div class="widget widget-red">
            <div class="widget-title">

                <?php echo $_smarty_tpl->getSubTemplate ('common/common_widget_controls.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <h3><i class="fa fa-ok-circle"></i> Cree una ticketera </h3>
            </div>
            <div class="widget-content">

                <?php echo $_smarty_tpl->getSubTemplate ("ticketerasPage/ticketera_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            </div>
        </div>


    </div>
</div>

</body>

</html><?php }} ?>
