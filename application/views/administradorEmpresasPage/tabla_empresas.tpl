<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre de Empresa</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    {foreach from=$empresas item=empresa}
        <tr>

            <td>
                <a href="{$root}/administrador/sucursales/{$empresa->getId()}">
                    {$empresa->getId()}
                </a>
            </td>

            <td>{$empresa->getNombre()}</td>

            <td class="text-right">
                <a href="{$root}/administrador/borrarempresa/{$empresa->getId()}" class="btn btn-danger btn-xs">
                    <i class="fa fa-times"></i>
                </a>
            </td>

        </tr>
    {/foreach}

    </tbody>
</table>