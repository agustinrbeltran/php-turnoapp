<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 03:41:10
         compiled from "application\views\templates\common\common_barra_superior.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1098653c971b9240258-64348802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfa4700cfc0bd58f0f8f4f7e39857a6d471f522d' => 
    array (
      0 => 'application\\views\\templates\\common\\common_barra_superior.tpl',
      1 => 1405734063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1098653c971b9240258-64348802',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c971b924fc56_39615998',
  'variables' => 
  array (
    'user_fullname' => 0,
    'root' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c971b924fc56_39615998')) {function content_53c971b924fc56_39615998($_smarty_tpl) {?><div class="page-header">
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
