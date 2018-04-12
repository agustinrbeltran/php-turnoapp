<?php /* Smarty version Smarty-3.1.19, created on 2014-07-21 06:29:43
         compiled from "application\views\ticketerasPage\tabla_ticketera.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2994653ca331e66b3b1-46461374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c9f48d58ec98ed9c7cbf563b602ceeff5694865' => 
    array (
      0 => 'application\\views\\ticketerasPage\\tabla_ticketera.tpl',
      1 => 1405916980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2994653ca331e66b3b1-46461374',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca331e68a7b8_49542279',
  'variables' => 
  array (
    'ticketeras' => 0,
    'root' => 0,
    'ticketera' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca331e68a7b8_49542279')) {function content_53ca331e68a7b8_49542279($_smarty_tpl) {?><table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Turno</th>
        <th>Promedio</th>

        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['ticketera'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ticketera']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ticketeras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ticketera']->key => $_smarty_tpl->tpl_vars['ticketera']->value) {
$_smarty_tpl->tpl_vars['ticketera']->_loop = true;
?>
    <tr>

        <td>
            <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/usuario/verticketera/<?php echo $_smarty_tpl->tpl_vars['ticketera']->value->getId();?>
" >
                <?php echo $_smarty_tpl->tpl_vars['ticketera']->value->getId();?>

            </a>
        </td>

        <td><?php echo $_smarty_tpl->tpl_vars['ticketera']->value->getTurno();?>
</td>

        <td><?php echo $_smarty_tpl->tpl_vars['ticketera']->value->getPromedio();?>
</td>


        <td class="text-right">
            <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/usuario/borrarticketera/<?php echo $_smarty_tpl->tpl_vars['ticketera']->value->getId();?>
" class="btn btn-danger btn-xs">
                <i class="fa fa-times"></i>
            </a>
        </td>

    </tr>
    <?php } ?>

    </tbody>
</table><?php }} ?>
