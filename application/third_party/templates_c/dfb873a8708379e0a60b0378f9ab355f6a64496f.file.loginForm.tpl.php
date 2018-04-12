<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 03:50:19
         compiled from "application\views\templates\loginPage\loginForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:847753c8d57393b935-69122144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfb873a8708379e0a60b0378f9ab355f6a64496f' => 
    array (
      0 => 'application\\views\\templates\\loginPage\\loginForm.tpl',
      1 => 1405734611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '847753c8d57393b935-69122144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c8d5739474b0_14044439',
  'variables' => 
  array (
    'root' => 0,
    'validation_errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c8d5739474b0_14044439')) {function content_53c8d5739474b0_14044439($_smarty_tpl) {?><form  role="form" method='post' accept-charset='UTF-8' action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/login/login_validation"  >

    <div class="lined-separator">Logueate con tu usuario y contraseña</div>

    <?php echo $_smarty_tpl->tpl_vars['validation_errors']->value;?>


    <div class="form-group relative-w">

        <input type="text" name='email' class="form-control" placeholder="Email" >
        <i class="fa fa-user input-abs-icon"></i>

    </div>

    <div class="form-group relative-w">

        <input type="password" name='password' class="form-control" placeholder="Password">
        <i class="fa fa-lock input-abs-icon"></i>

    </div>

    <input type='submit' name='Submit' class="btn btn-primary btn-rounded btn-iconed" value='Submit'/>


    <div class="no-account-yet">
        No tenes una cuenta todavia? <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/signup" >Registrate ahora</a>
    </div>

    <div class="no-account-yet">
        Si sos un usuario de sucursal logueate <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/loginusuario" >aqui</a>
    </div>

</form><?php }} ?>
