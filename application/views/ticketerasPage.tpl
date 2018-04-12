<!DOCTYPE html>
<html>

{include file="common/common_header.tpl"}

<body class="glossed">

<div class="all-wrapper fixed-header left-menu">

    {include file="common/common_barra_superior.tpl"}

    {include file="ticketerasPage/barra_lateral_interna_ticketera.tpl"}

    <div class="main-content">

        <div class="widget widget-red">

            <div class="widget-title">

                {include file="common/common_widget_controls.tpl" }

                <h3><i class="fa fa-table"></i> Ticketeras </h3>

            </div>


            <div class="widget-content">

                <div class="table-responsive">
                    {include file="ticketerasPage/tabla_ticketera.tpl"}
                </div>

            </div>

        </div>


        <div class="widget widget-red">
            <div class="widget-title">

                {include file='common/common_widget_controls.tpl'}

                <h3><i class="fa fa-ok-circle"></i> Cree una ticketera </h3>
            </div>
            <div class="widget-content">

                {include file="ticketerasPage/ticketera_form.tpl"}

            </div>
        </div>


    </div>
</div>

</body>

</html>