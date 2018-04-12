<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 08:36:14
         compiled from "application\views\registerPage\registerForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3091453ca09b1582849-66915161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '624d9c723c1085af1f6c936fbae7c7657e5dc39d' => 
    array (
      0 => 'application\\views\\registerPage\\registerForm.tpl',
      1 => 1405751761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3091453ca09b1582849-66915161',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca09b158e3c9_40205298',
  'variables' => 
  array (
    'root' => 0,
    'validation_errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca09b158e3c9_40205298')) {function content_53ca09b158e3c9_40205298($_smarty_tpl) {?><form id="reg"  role="form" method='post' action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/signup/signup_validation">

    <div class="lined-separator">Registrate</div>

    <?php echo $_smarty_tpl->tpl_vars['validation_errors']->value;?>


    <div class="form-group relative-w">

        <input  name='nombre' required="required" type="text" class="form-control" placeholder="Nombre">
        <i class="fa fa-user input-abs-icon"></i>

    </div>

    <div class="form-group relative-w">

        <input name='apellido' required="required" type="text" class="form-control" placeholder="Apellido">
        <i class="fa fa-user input-abs-icon"></i>

    </div>

    <div class="form-group relative-w">

        <input  name='email' required="email" type="email" class="form-control" placeholder="Enter email">
        <i class="fa fa-envelope-alt input-abs-icon"></i>

    </div>

    <div class="form-group relative-w">

        <input  name='password' type="password" required="password" class="form-control" placeholder="Password">
        <i class="fa fa-lock input-abs-icon"></i>

    </div>

    <div class="form-group relative-w">

        <input  name='cpassword' type="password" required="cpassword" class="form-control" placeholder="Confirm Password">
        <i class="fa fa-lock input-abs-icon"></i>

    </div>

    <input type='submit' name='Submit' class="btn btn-success btn-rounded btn-iconed" value='Submit'/>

    <div class="no-account-yet">
        Ya estas registrado? <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/login">Login</a>
    </div>
</form><?php }} ?>
