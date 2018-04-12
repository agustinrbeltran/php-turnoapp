<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 03:41:10
         compiled from "application\views\templates\administradorEmpresasPage\empresa_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:837553c971b935d513-09152053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7663a959471dbbde62463e6349d1c7167c1253a' => 
    array (
      0 => 'application\\views\\templates\\administradorEmpresasPage\\empresa_form.tpl',
      1 => 1405734063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '837553c971b935d513-09152053',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c971b9361396_17886560',
  'variables' => 
  array (
    'root' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c971b9361396_17886560')) {function content_53c971b9361396_17886560($_smarty_tpl) {?><form class="bottom-margin"  method="post" action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/agregarempresa">

    <fieldset>
        <legend>Cree su empresa aqui</legend>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">

                    <label>Nombre</label>

                    <div class="iconed-input">

                        <input type="text" name="nombre" class="form-control" minlength="2" required placeholder="Nombre">

                    </div>

                </div>
            </div>
        </div>
        <div class="form-group">

            <button type="submit" class="btn btn-primary"><i class="fa fa-ok"></i> Ingresar</button>

        </div>
    </fieldset>

</form><?php }} ?>
