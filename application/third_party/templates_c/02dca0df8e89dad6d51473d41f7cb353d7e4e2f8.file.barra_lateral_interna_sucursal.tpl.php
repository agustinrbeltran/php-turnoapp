<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 09:01:55
         compiled from "application\views\administradorSucursalPage\barra_lateral_interna_sucursal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:702153ca17e3bf6612-57348859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02dca0df8e89dad6d51473d41f7cb353d7e4e2f8' => 
    array (
      0 => 'application\\views\\administradorSucursalPage\\barra_lateral_interna_sucursal.tpl',
      1 => 1405734063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '702153ca17e3bf6612-57348859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca17e3bfa490_86517822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca17e3bfa490_86517822')) {function content_53ca17e3bfa490_86517822($_smarty_tpl) {?><div class="side">

    <?php echo $_smarty_tpl->getSubTemplate ("../common/common_barra_lateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="sub-sidebar-wrapper">

        <ul>

            <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/empresas"> Empresas</a></li>

            <li class='current'><a class='current' href="#"> Sucursales</a></li>

        </ul>

    </div>

</div><?php }} ?>
