<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 03:44:44
         compiled from "application\views\templates\administradorSucursalPage\sucursal_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2925053c9864a542450-63125103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cb9429f0ca26b41415f25c51a96b45419ff223b' => 
    array (
      0 => 'application\\views\\templates\\administradorSucursalPage\\sucursal_form.tpl',
      1 => 1405734063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2925053c9864a542450-63125103',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c9864a5462d3_57195273',
  'variables' => 
  array (
    'root' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c9864a5462d3_57195273')) {function content_53c9864a5462d3_57195273($_smarty_tpl) {?>
<form class="bottom-margin"  method="post" action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/agregarsucursal">

    <fieldset>

        <legend>Cree su sucursal aqui</legend>

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

                    <label>Direccion</label>
                    <div class="iconed-input"><input type="text" name="direccion" class="form-control" minlength="2" required placeholder="Direccion"></div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">

                    <label>Ciudad</label>
                    <div class="iconed-input"><input type="text" name="ciudad" class="form-control" minlength="2" required placeholder="Ciudad"></div>

                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-ok"></i> Ingresar</button>
        </div>

    </fieldset>

</form><?php }} ?>
