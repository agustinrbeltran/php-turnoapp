<?php /* Smarty version Smarty-3.1.19, created on 2014-07-21 06:29:45
         compiled from "application\views\verTicketeraPage\barra_lateral_interna_verTicketera.tpl" */ ?>
<?php /*%%SmartyHeaderCode:772553cc97399844c4-62083113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8197f63d6e4c5aa89c89541714c43c3d04cf8bd' => 
    array (
      0 => 'application\\views\\verTicketeraPage\\barra_lateral_interna_verTicketera.tpl',
      1 => 1405916949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '772553cc97399844c4-62083113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53cc9739993ec4_47446662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cc9739993ec4_47446662')) {function content_53cc9739993ec4_47446662($_smarty_tpl) {?><div class="side">

    <?php echo $_smarty_tpl->getSubTemplate ("../common/common_barra_lateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="sub-sidebar-wrapper">
        <ul>

            <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/usuario/ticketeras">Ticketeras </a></li>

            <li class='current'><a class='current' href="#"> Administrar ticketera</a></li>

        </ul>
    </div>
</div><?php }} ?>
