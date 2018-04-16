<form class="bottom-margin" method="post" action="{$root}/administrador/agregarempresa">

    <fieldset>
        <legend>Cree su empresa aqui</legend>

        {$validation_errors}


        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">

                    <label>Nombre</label>


                    <div class="iconed-input">

                        <input type="text" name="nombre" class="form-control" minlength="2" required
                               placeholder="Nombre">

                    </div>

                </div>
            </div>
        </div>
        <div class="form-group">

            <button type="submit" class="btn btn-primary"><i class="fa fa-ok"></i> Ingresar</button>

        </div>
    </fieldset>

</form>