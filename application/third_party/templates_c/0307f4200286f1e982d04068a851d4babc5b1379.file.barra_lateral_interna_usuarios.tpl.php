<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 04:31:11
         compiled from "application\views\templates\administradorUsuarioSucursalPage\barra_lateral_interna_usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1950553c9d801a00ce0-60415848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0307f4200286f1e982d04068a851d4babc5b1379' => 
    array (
      0 => 'application\\views\\templates\\administradorUsuarioSucursalPage\\barra_lateral_interna_usuarios.tpl',
      1 => 1405737063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1950553c9d801a00ce0-60415848',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c9d801a0c879_42198410',
  'variables' => 
  array (
    'root' => 0,
    'id_empresa_seleccionada' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c9d801a0c879_42198410')) {function content_53c9d801a0c879_42198410($_smarty_tpl) {?><div class="side">

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
