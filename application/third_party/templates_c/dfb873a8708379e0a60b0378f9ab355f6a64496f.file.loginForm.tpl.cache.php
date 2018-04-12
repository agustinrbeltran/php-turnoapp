<?php /* Smarty version Smarty-3.1.19, created on 2014-07-18 11:06:44
         compiled from "application\views\templates\loginPage\loginForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:449453c8d2140f8c37-47326661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfb873a8708379e0a60b0378f9ab355f6a64496f' => 
    array (
      0 => 'application\\views\\templates\\loginPage\\loginForm.tpl',
      1 => 1405674402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '449453c8d2140f8c37-47326661',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c8d214123bb1_90604308',
  'variables' => 
  array (
    'form_action' => 0,
    'register_page' => 0,
    'login_usr_sucursal_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c8d214123bb1_90604308')) {function content_53c8d214123bb1_90604308($_smarty_tpl) {?><form  role="form" method='post' accept-charset='UTF-8' action=<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
  >

    <div class="lined-separator">Logueate con tu usuario y contraseña</div>


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
        No tenes una cuenta todavia? <a href=<?php echo $_smarty_tpl->tpl_vars['register_page']->value;?>
 >Registrate ahora</a>
    </div>

    <div class="no-account-yet">
        Si sos un usuario de sucursal logueate <a href=<?php echo $_smarty_tpl->tpl_vars['login_usr_sucursal_page']->value;?>
 >aqui</a>
    </div>

</form><?php }} ?>
