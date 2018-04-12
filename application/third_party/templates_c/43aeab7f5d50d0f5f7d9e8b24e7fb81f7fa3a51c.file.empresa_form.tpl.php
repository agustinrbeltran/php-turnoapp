<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 09:47:15
         compiled from "application\views\administradorEmpresasPage\empresa_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2448453ca087bb6b5f0-68890695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43aeab7f5d50d0f5f7d9e8b24e7fb81f7fa3a51c' => 
    array (
      0 => 'application\\views\\administradorEmpresasPage\\empresa_form.tpl',
      1 => 1405755587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2448453ca087bb6b5f0-68890695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca087bb6f470_05536774',
  'variables' => 
  array (
    'root' => 0,
    'validation_errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca087bb6f470_05536774')) {function content_53ca087bb6f470_05536774($_smarty_tpl) {?><form class="bottom-margin"  method="post" action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/administrador/agregarempresa">

    <fieldset>
        <legend>Cree su empresa aqui</legend>

        <?php echo $_smarty_tpl->tpl_vars['validation_errors']->value;?>



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
