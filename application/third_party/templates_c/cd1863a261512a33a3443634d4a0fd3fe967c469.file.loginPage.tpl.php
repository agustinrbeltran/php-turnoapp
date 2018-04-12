<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 10:18:07
         compiled from "application\views\loginPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1207653ca06347a51f1-94533748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd1863a261512a33a3443634d4a0fd3fe967c469' => 
    array (
      0 => 'application\\views\\loginPage.tpl',
      1 => 1405757885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1207653ca06347a51f1-94533748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca06347dfb83_61380409',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca06347dfb83_61380409')) {function content_53ca06347dfb83_61380409($_smarty_tpl) {?><!DOCTYPE html>
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
                        <h3 class="text-center"><i class="fa fa-lock"></i> Login </h3>
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
