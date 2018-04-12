
<form class="bottom-margin"  method="post" action="{$root}/administrador/agregarsucursal">

    <fieldset>

        <legend>Cree su sucursal aqui</legend>

        {$validation_errors}


        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">

                    <label>Nombre</label>
                    <div class="iconed-input"><input type="text" name="nombre" class="form-control" minlength="2" required placeholder="Nombre"></div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">

                    <label>Direccion</label>
                    <div class="iconed-input"><input type="text" name="direccion" class="form-control" minlength="2" required placeholder="Direccion"></div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">

                    <label>Ciudad</label>
                    <div class="iconed-input"><input type="text" name="ciudad" class="form-control" minlength="2" required placeholder="Ciudad"></div>

                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-ok"></i> Ingresar</button>
        </div>

    </fieldset>

</form>