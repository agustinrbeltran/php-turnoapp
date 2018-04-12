<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 09:39:48
         compiled from "application\views\administradorUsuarioSucursalPage\usuario_sucursal_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2164753ca1a98169973-32861923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91e98f838327adea626fe9db542871f6fecf2718' => 
    array (
      0 => 'application\\views\\administradorUsuarioSucursalPage\\usuario_sucursal_form.tpl',
      1 => 1405755587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2164753ca1a98169973-32861923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca1a9816d7f1_02396443',
  'variables' => 
  array (
    'root' => 0,
    'validation_errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca1a9816d7f1_02396443')) {function content_53ca1a9816d7f1_02396443($_smarty_tpl) {?><form class="bottom-margin" id="validateForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/agregarusuario">
    <fieldset>
        <legend>Cree su usuario aqui</legend>

        <?php echo $_smarty_tpl->tpl_vars['validation_errors']->value;?>



        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">
                    <label>Nombre</label>
                    <div class="iconed-input"><input type="text" name="nombre" class="form-control" minlength="2" required placeholder="Nombre"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">
                    <label>Apellido</label>
                    <div class="iconed-input"><input type="text" name="apellido" class="form-control" minlength="2" required placeholder="Apellido"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">
                    <label>Email</label>
                    <div class="iconed-input"><input type="email" name="email" class="form-control" minlength="2" required placeholder="Email"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">
                    <label>Password</label>
                    <div class="iconed-input"><input type="password" name="password" class="form-control" minlength="2" required placeholder="Password"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">
                    <label>Confirm Password</label>
                    <div class="iconed-input"><input type="password" name="cpassword" class="form-control" minlength="2" required placeholder="Confirm Password"></div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-ok"></i> Ingresar</button>
        </div>

    </fieldset>
</form><?php }} ?>
