<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 04:31:11
         compiled from "application\views\templates\administradorUsuarioSucursalPage\usuario_sucursal_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2063153c9d801a4b083-71323375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b11e6029b2853a58ab3e5dadf99d26ecb893b6da' => 
    array (
      0 => 'application\\views\\templates\\administradorUsuarioSucursalPage\\usuario_sucursal_form.tpl',
      1 => 1405737063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2063153c9d801a4b083-71323375',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c9d801a52d80_87367436',
  'variables' => 
  array (
    'root' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c9d801a52d80_87367436')) {function content_53c9d801a52d80_87367436($_smarty_tpl) {?><form class="bottom-margin" id="validateForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/agregarusuario">
    <fieldset>
        <legend>Cree su usuario aqui</legend>

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
                    <label>Username</label>
                    <div class="iconed-input"><input type="text" name="username" class="form-control" minlength="2" required placeholder="Username"></div>
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
        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-ok"></i> Ingresar</button>
        </div>
    </fieldset>
</form><?php }} ?>
