<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 07:56:11
         compiled from "application\views\common\common_barra_superior.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1417153ca087bb11863-60778023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afa4eb53759f10c9d2aa1e378150d1f81d1f3b07' => 
    array (
      0 => 'application\\views\\common\\common_barra_superior.tpl',
      1 => 1405734063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1417153ca087bb11863-60778023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_fullname' => 0,
    'root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca087bb1d3e4_72244592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca087bb1d3e4_72244592')) {function content_53ca087bb1d3e4_72244592($_smarty_tpl) {?><div class="page-header">
    <div class="header-links hidden-xs">

        <div class="top-search-w pull-right">
            <input type="text" class="top-search" placeholder="Search"/>
        </div>


        <div class="dropdown">

            <a href="#" class="header-link clearfix" data-toggle="dropdown">

                <div class="user-name-w">

                    <?php echo $_smarty_tpl->tpl_vars['user_fullname']->value;?>
 <i class="fa fa-caret-down"></i>

                </div>
            </a>

            <ul class="dropdown-menu dropdown-inbar">

                <li><a href="#"><i class="fa fa-cog"></i> Account Settings</a></li>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/logout"><i class="fa fa-power-off"></i> Logout</a></li>

            </ul>
        </div>

    </div>

    <a class="current logo hidden-xs" href="#"><i class="fa fa-rocket"></i></a>
    <a class="menu-toggler" href="#"><i class="fa fa-bars"></i></a>

    <h1>Tablero de Control</h1>

</div><?php }} ?>
