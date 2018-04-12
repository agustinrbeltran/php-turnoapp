<?php /* Smarty version Smarty-3.1.19, created on 2014-07-21 23:59:01
         compiled from "application\views\verticketeraPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2387653cc97398b9295-72306317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5548fc5fcf495801a296119103e5848cbdc1fd3' => 
    array (
      0 => 'application\\views\\verticketeraPage.tpl',
      1 => 1405979937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2387653cc97398b9295-72306317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53cc973993dfb7_01289496',
  'variables' => 
  array (
    'id_ticketera' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cc973993dfb7_01289496')) {function content_53cc973993dfb7_01289496($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("common/common_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body class="glossed">

<div class="all-wrapper fixed-header left-menu">

    <?php echo $_smarty_tpl->getSubTemplate ("common/common_barra_superior.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("verTicketeraPage/barra_lateral_interna_verTicketera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="main-content">

        <div class="widget widget-green">

            <div class="widget-title">

                <?php echo $_smarty_tpl->getSubTemplate ('common/common_widget_controls.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <h3><i class="fa fa-ok-circle"></i> Administrar ticketera <?php echo $_smarty_tpl->tpl_vars['id_ticketera']->value;?>
</h3>
            </div>
            <div class="widget-content">

                <?php echo $_smarty_tpl->getSubTemplate ("verTicketeraPage/ticketera_window.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            </div>
        </div>

    </div>
</div>


</body>

</html><?php }} ?>
