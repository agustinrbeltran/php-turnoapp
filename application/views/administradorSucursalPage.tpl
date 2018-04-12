<!DOCTYPE html>
<html>

{include file="common/common_header.tpl"}

<body class="glossed">

<div class="all-wrapper fixed-header left-menu">

    {include file="common/common_barra_superior.tpl"}

    {include file="administradorSucursalPage/barra_lateral_interna_sucursal.tpl"}

    <div class="main-content">

        <div class="widget widget-green">

            <div class="widget-title">

                {include file="common/common_widget_controls.tpl"}

                <h3><i class="fa fa-table"></i> Sucursales de {$nombre_empresa} </h3>

            </div>


            <div class="widget-content">

                <div class="table-responsive">
                    {include file="administradorSucursalPage/tabla_sucursales.tpl"}
                </div>

            </div>
        </div>

        <div class="widget widget-green">
            <div class="widget-title">

                {include file='common/common_widget_controls.tpl'}

                <h3><i class="fa fa-ok-circle"></i> Cree una sucursal </h3>
            </div>
            <div class="widget-content">

                {include file="administradorSucursalPage/sucursal_form.tpl"}

            </div>
        </div>

    </div>
</div>


</body>

</html>