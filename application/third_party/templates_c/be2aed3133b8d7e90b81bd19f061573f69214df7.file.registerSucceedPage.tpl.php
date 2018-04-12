<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 08:41:56
         compiled from "application\views\registerSucceedPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1403553ca133449d1b3-73564259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be2aed3133b8d7e90b81bd19f061573f69214df7' => 
    array (
      0 => 'application\\views\\registerSucceedPage.tpl',
      1 => 1405750965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1403553ca133449d1b3-73564259',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca13344d7b45_51688043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca13344d7b45_51688043')) {function content_53ca13344d7b45_51688043($_smarty_tpl) {?><!DOCTYPE html>
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

                    Se ha enviado la confirmacion! <br>

                    Revisa tu casilla de correo para completar el registro.<br>

                    <div class="no-account-yet">
                        Volver al <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/login" >Login</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html><?php }} ?>
