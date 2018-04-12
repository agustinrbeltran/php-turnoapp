<table class="table table-bordered table-hover datatable">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre de Usuario</th>
        <th>Apellido</th>
        <th>Mail</th>
        <th>Username</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    {foreach from=$usuarios item=usuario}
        <tr>
            <td>{$usuario->getId()}</td>
            <td>{$usuario->getNombre()}</td>
            <td>{$usuario->getApellido()}</td>
            <td>{$usuario->getEmail()}</td>
            <td>{$usuario->getUsername()}</td>
            <td class="text-right">
                <a href="{$root}/administrador/borrarusuario/{$usuario->getId()}" class="btn btn-danger btn-xs remove-tr"><i class="fa fa-times"></i></a>
            </td>
        </tr>
    {/foreach}

    </tbody>
</table>