<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 08:01:21
         compiled from "application\views\registerPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2484553ca09b153c339-82586773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8ef6f5c83a70a9b8f071a28cfebb95d28af5c31' => 
    array (
      0 => 'application\\views\\registerPage.tpl',
      1 => 1405369583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2484553ca09b153c339-82586773',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca09b1572e44_01886819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca09b1572e44_01886819')) {function content_53ca09b1572e44_01886819($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("common/common_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<body class="glossed">


<div class="all-wrapper no-menu-wrapper light-bg">

  <div class="login-logo-w">

    <a href="" class="logo">

      <i class="fa fa-rocket"></i>

    </a>

  </div>

  <div class="row">
    <div class="col-md-4 col-md-offset-4">

      <div class="widget widget-blue">

        <div class="widget-title">

          <h3 class="text-center"><i class="fa fa-lock"></i> Registro</h3>

        </div>

        <div class="widget-content">

          <?php echo $_smarty_tpl->getSubTemplate ("registerPage/registerForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        </div>
      </div>
    </div>
  </div>
</div>

</body>

</html><?php }} ?>
