<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 09:13:28
         compiled from "application\views\administradorUsuarioSucursalPage\barra_lateral_interna_usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36153ca1a981272e9-08557176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9694b14e0b927df0de74b572579d9ebf8c42821' => 
    array (
      0 => 'application\\views\\administradorUsuarioSucursalPage\\barra_lateral_interna_usuarios.tpl',
      1 => 1405737063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36153ca1a981272e9-08557176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'root' => 0,
    'id_empresa_seleccionada' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca1a98132e64_20521347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca1a98132e64_20521347')) {function content_53ca1a98132e64_20521347($_smarty_tpl) {?><div class="side">

    <?php echo $_smarty_tpl->getSubTemplate ("../common/common_barra_lateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="sub-sidebar-wrapper">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/empresas"> Empresas</a></li>

            <li><a class='current' href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/sucursales/<?php echo $_smarty_tpl->tpl_vars['id_empresa_seleccionada']->value;?>
"> Sucursales</a></li>

            <li class='current'><a class='current' href="#"> Usuarios de sucursal</a></li>

        </ul>
    </div>

</div><?php }} ?>
