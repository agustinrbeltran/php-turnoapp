<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 09:39:58
         compiled from "application\views\administradorSucursalPage\sucursal_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2667553ca17e3c30fa3-23976683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6781557082294f40c892a5f56e8ee6ac774db21' => 
    array (
      0 => 'application\\views\\administradorSucursalPage\\sucursal_form.tpl',
      1 => 1405755587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2667553ca17e3c30fa3-23976683',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca17e3c34e28_13369070',
  'variables' => 
  array (
    'root' => 0,
    'validation_errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca17e3c34e28_13369070')) {function content_53ca17e3c34e28_13369070($_smarty_tpl) {?>
<form class="bottom-margin"  method="post" action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/agregarsucursal">

    <fieldset>

        <legend>Cree su sucursal aqui</legend>

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
