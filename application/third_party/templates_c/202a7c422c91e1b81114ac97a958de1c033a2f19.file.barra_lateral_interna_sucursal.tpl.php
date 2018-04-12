<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 03:44:44
         compiled from "application\views\templates\administradorSucursalPage\barra_lateral_interna_sucursal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2384453c9864a4dcb32-38365596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '202a7c422c91e1b81114ac97a958de1c033a2f19' => 
    array (
      0 => 'application\\views\\templates\\administradorSucursalPage\\barra_lateral_interna_sucursal.tpl',
      1 => 1405734063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2384453c9864a4dcb32-38365596',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c9864a4ec536_88893845',
  'variables' => 
  array (
    'root' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c9864a4ec536_88893845')) {function content_53c9864a4ec536_88893845($_smarty_tpl) {?><div class="side">

    <?php echo $_smarty_tpl->getSubTemplate ("../common/common_barra_lateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="sub-sidebar-wrapper">

        <ul>

            <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/empresas"> Empresas</a></li>

            <li class='current'><a class='current' href="#"> Sucursales</a></li>

        </ul>

    </div>

</div><?php }} ?>
