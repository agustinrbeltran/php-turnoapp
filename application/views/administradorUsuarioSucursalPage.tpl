<!DOCTYPE html>
<html>

{include file="common/common_header.tpl"}

<body class="glossed">

<div class="all-wrapper fixed-header left-menu">

    {include file="common/common_barra_superior.tpl"}

    {include file="administradorUsuarioSucursalPage/barra_lateral_interna_usuarios.tpl"}

    <div class="main-content">

        <div class="widget widget-blue">

            <div class="widget-title">

                {include file="common/common_widget_controls.tpl"}

                <h3><i class="fa fa-table"></i> Usuarios de {$nombre_sucursal} </h3>

            </div>


            <div class="widget-content">

                <div class="table-responsive">
                    {include file="administradorUsuarioSucursalPage/tabla_usuarios.tpl"}
                </div>

            </div>
        </div>

        <div class="widget widget-blue">
            <div class="widget-title">

                {include file='common/common_widget_controls.tpl'}

                <h3><i class="fa fa-ok-circle"></i> Cree un usuario sucursal </h3>
            </div>
            <div class="widget-content">

                {include file="administradorUsuarioSucursalPage/usuario_sucursal_form.tpl"}

            </div>
        </div>

    </div>
</div>


</body>

</html>