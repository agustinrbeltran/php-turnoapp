<?php /* Smarty version Smarty-3.1.19, created on 2014-07-18 11:14:57
         compiled from "application\views\templates\loginPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3098253c8d573883f87-63098833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef6902e7b2d8b57372d66517523611bfacfb0aed' => 
    array (
      0 => 'application\\views\\templates\\loginPage.tpl',
      1 => 1405674166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3098253c8d573883f87-63098833',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c8d5738b6c10_30122784',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c8d5738b6c10_30122784')) {function content_53c8d5738b6c10_30122784($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("common/common_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body class="glossed">

    <div class="all-wrapper no-menu-wrapper light-bg">

        <div class="login-logo-w">
            <a href="#" class="logo">
                <i class="fa fa-rocket"></i>
            </a>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                <div class="widget widget-blue">
                    <div class="widget-title">
                        <h3 class="text-center"><i class="fa fa-lock"></i> Login para Administradores </h3>
                    </div>
                    <div class="widget-content">


                        <?php echo $_smarty_tpl->getSubTemplate ('loginPage/loginForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php }} ?>
