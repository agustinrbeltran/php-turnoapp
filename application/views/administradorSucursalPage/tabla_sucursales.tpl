<table class="table table-bordered table-hover">

    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre de Sucursal</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th></th>
    </tr>
    </thead>
    <tbody>

    {foreach from=$sucursales item=sucursal}
        <tr>
            <td>
                <a href="{$root}/administrador/usuarios/{$sucursal->getId()}">
                    {$sucursal->getId()}
                </a>
            </td>

            <td>{$sucursal->getNombre()}</td>

            <td>{$sucursal->getDireccion()}</td>

            <td>{$sucursal->getCiudad()}</td>

            <td class="text-right">

                <a href="{$root}/administrador/borrarsucursal/{$sucursal->getId()}" class="btn btn-danger btn-xs"><i
                            class="fa fa-times"></i></a>

            </td>
        </tr>
    {/foreach}

    </tbody>
</table>