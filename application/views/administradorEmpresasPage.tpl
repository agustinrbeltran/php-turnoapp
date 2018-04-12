<!DOCTYPE html>
<html>

{include file="common/common_header.tpl"}

<body class="glossed">

<div class="all-wrapper fixed-header left-menu">

    {include file="common/common_barra_superior.tpl"}

    {include file="administradorEmpresasPage/barra_lateral_interna_empresa.tpl"}

    <div class="main-content">

        <div class="widget widget-red">

            <div class="widget-title">

                {include file="common/common_widget_controls.tpl" }

                <h3><i class="fa fa-table"></i> Empresas </h3>

            </div>


            <div class="widget-content">

                <div class="table-responsive">
                    {include file="administradorEmpresasPage/tabla_empresas.tpl"}
                </div>

            </div>

        </div>


        <div class="widget widget-red">
            <div class="widget-title">

                {include file='common/common_widget_controls.tpl'}

                <h3><i class="fa fa-ok-circle"></i> Cree una empresa </h3>
            </div>
            <div class="widget-content">

                {include file="administradorEmpresasPage/empresa_form.tpl"}

            </div>
        </div>


    </div>
</div>

</body>

</html>