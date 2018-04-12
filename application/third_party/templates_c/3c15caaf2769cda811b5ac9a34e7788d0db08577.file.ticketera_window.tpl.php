<?php /* Smarty version Smarty-3.1.19, created on 2014-07-22 00:19:57
         compiled from "application\views\verTicketeraPage\ticketera_window.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1622653cc97399a38c5-19783248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c15caaf2769cda811b5ac9a34e7788d0db08577' => 
    array (
      0 => 'application\\views\\verTicketeraPage\\ticketera_window.tpl',
      1 => 1405981195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1622653cc97399a38c5-19783248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53cc97399a7744_33312174',
  'variables' => 
  array (
    'turno' => 0,
    'promedio' => 0,
    'root' => 0,
    'id_ticketera' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cc97399a7744_33312174')) {function content_53cc97399a7744_33312174($_smarty_tpl) {?><div class="widget-content">
    <div class="row">
        <div class="col-md-4">
            <div class="big-legend-w shadow-right">
                <div class="legend-label">Turno</div>
                <div class="legend-value" id="plot-chart-value"><?php echo $_smarty_tpl->tpl_vars['turno']->value;?>
</div>
                <div class="legend-sub-label">Promedio de tiempo: <?php echo $_smarty_tpl->tpl_vars['promedio']->value;?>
 segundos</div>
            </div>
        </div>
        <form action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/usuario/aumentar/<?php echo $_smarty_tpl->tpl_vars['id_ticketera']->value;?>
" method="post"  >
            <button type="submit"  class="btn btn-action btn-lg btn-info"><i class="fa fa-upload"></i> Aumentar</button>
        </form>
        <br>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/usuario/reiniciar/<?php echo $_smarty_tpl->tpl_vars['id_ticketera']->value;?>
" >
            <button type="submit" class="btn btn-action btn-lg btn-warning"><i class="fa fa-undo"></i> Reiniciar</button>
        </form>

    </div>
</div><?php }} ?>
