<?php /* Smarty version Smarty-3.1.19, created on 2014-07-19 07:56:11
         compiled from "application\views\common\common_widget_controls.tpl" */ ?>
<?php /*%%SmartyHeaderCode:799053ca087bb3c7f1-58295547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4da3115fa71fe7d9d303af12a69d3f6bf558800e' => 
    array (
      0 => 'application\\views\\common\\common_widget_controls.tpl',
      1 => 1405291232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '799053ca087bb3c7f1-58295547',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ca087bb3c7f8_93441226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ca087bb3c7f8_93441226')) {function content_53ca087bb3c7f8_93441226($_smarty_tpl) {?><div class="widget-controls">

    <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top"
       title="" data-original-title="Full Screen"><i class="fa fa-expand"></i></a>
    <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full"
       data-toggle="tooltip" data-placement="left" title="" data-original-title="Exit Full Screen"><i
                class="fa fa-expand"></i></a>
    <a href="#" data-toggle="dropdown" class="widget-control widget-control-settings"><i class="fa fa-cog"></i></a>

    <div class="dropdown" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
        <ul class="dropdown-menu dropdown-menu-small" role="menu" aria-labelledby="dropdownMenu1">
            <li class="dropdown-header">Set Widget Color</li>
            <li><a data-widget-color="blue" class="set-widget-color" href="#">Blue</a></li>
            <li><a data-widget-color="red" class="set-widget-color" href="#">Red</a></li>
            <li><a data-widget-color="green" class="set-widget-color" href="#">Green</a></li>
            <li><a data-widget-color="orange" class="set-widget-color" href="#">Orange</a></li>
            <li><a data-widget-color="purple" class="set-widget-color" href="#">Purple</a></li>
        </ul>
    </div>

    <a href="#" class="widget-control widget-control-refresh" data-toggle="tooltip" data-placement="top" title=""
       data-original-title="Refresh"><i class="fa fa-refresh"></i></a>
    <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title=""
       data-original-title="Minimize"><i class="fa fa-minus-circle"></i></a>
    <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title=""
       data-original-title="Remove"><i class="fa fa-times-circle"></i></a>

</div>
<?php }} ?>
