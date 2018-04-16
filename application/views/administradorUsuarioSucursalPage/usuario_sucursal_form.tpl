<form class="bottom-margin" id="validateForm" method="post" action="{$root}/administrador/agregarusuario">
    <fieldset>
        <legend>Cree su usuario aqui</legend>

        {$validation_errors}


        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">
                    <label>Nombre</label>
                    <div class="iconed-input"><input type="text" name="nombre" class="form-control" minlength="2"
                                                     required placeholder="Nombre"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">
                    <label>Apellido</label>
                    <div class="iconed-input"><input type="text" name="apellido" class="form-control" minlength="2"
                                                     required placeholder="Apellido"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">
                    <label>Email</label>
                    <div class="iconed-input"><input type="email" name="email" class="form-control" minlength="2"
                                                     required placeholder="Email"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">
                    <label>Password</label>
                    <div class="iconed-input"><input type="password" name="password" class="form-control" minlength="2"
                                                     required placeholder="Password"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-iconed">
                    <label>Confirm Password</label>
                    <div class="iconed-input"><input type="password" name="cpassword" class="form-control" minlength="2"
                                                     required placeholder="Confirm Password"></div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-ok"></i> Ingresar</button>
        </div>

    </fieldset>
</form>