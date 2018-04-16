<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Turno</th>
        <th>Promedio</th>

        <th></th>
    </tr>
    </thead>
    <tbody>
    {foreach from=$ticketeras item=ticketera}
        <tr>

            <td>
                <a href="{$root}/usuario/verticketera/{$ticketera->getId()}">
                    {$ticketera->getId()}
                </a>
            </td>

            <td>{$ticketera->getTurno()}</td>

            <td>{$ticketera->getPromedio()}</td>


            <td class="text-right">
                <a href="{$root}/usuario/borrarticketera/{$ticketera->getId()}" class="btn btn-danger btn-xs">
                    <i class="fa fa-times"></i>
                </a>
            </td>

        </tr>
    {/foreach}

    </tbody>
</table>