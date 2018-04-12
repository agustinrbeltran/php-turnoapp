<!DOCTYPE html>
<html>

{include file="common/common_header.tpl"}

<body class="glossed">

<div class="all-wrapper fixed-header left-menu">

    {include file="common/common_barra_superior.tpl"}

    {include file="verTicketeraPage/barra_lateral_interna_verTicketera.tpl"}

    <div class="main-content">

        <div class="widget widget-green">

            <div class="widget-title">

                {include file='common/common_widget_controls.tpl'}

                <h3><i class="fa fa-ok-circle"></i> Administrar ticketera {$id_ticketera}</h3>
            </div>
            <div class="widget-content">

                {include file="verTicketeraPage/ticketera_window.tpl"}

            </div>
        </div>

    </div>
</div>


</body>

</html>