<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 10:18:07
         compiled from "application\views\loginPage\loginForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2098753ca0634870425-40663113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe38d9985c3d8a35f33dc9c058151734531fde9e' => 
    array (
      0 => 'application\\views\\loginPage\\loginForm.tpl',
      1 => 1405757885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2098753ca0634870425-40663113',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca0634878124_96892539',
  'variables' => 
  array (
    'root' => 0,
    'validation_errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca0634878124_96892539')) {function content_53ca0634878124_96892539($_smarty_tpl) {?><form  role="form" method='post' accept-charset='UTF-8' action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/login/login_validation"  >

    <div class="lined-separator">Logueate con tu usuario y contraseña</div>

    <?php echo $_smarty_tpl->tpl_vars['validation_errors']->value;?>


    <div class="form-group relative-w">

        <input type="text" name='email' required="required" class="form-control" placeholder="Email" >
        <i class="fa fa-user input-abs-icon"></i>

    </div>

    <div class="form-group relative-w">

        <input type="password" name='password' required="required" class="form-control" placeholder="Password">
        <i class="fa fa-lock input-abs-icon"></i>

    </div>

    <input type='submit' name='Submit' class="btn btn-primary btn-rounded btn-iconed" value='Submit'/>


    <div class="no-account-yet">
        No tenes una cuenta todavia? <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/signup" >Registrate ahora</a>
    </div>

</form><?php }} ?>
