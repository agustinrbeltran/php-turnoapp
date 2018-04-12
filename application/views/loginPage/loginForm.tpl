<form  role="form" method='post' accept-charset='UTF-8' action="{$root}/login/login_validation"  >

    <div class="lined-separator">Logueate con tu usuario y contraseña</div>

    {$validation_errors}

    <div class="form-group relative-w">

        <input type="text" name='email' required="required" class="form-control" placeholder="Email" >
        <i class="fa fa-user input-abs-icon"></i>

    </div>

    <div class="form-group relative-w">

        <input type="password" name='password' required="required" class="form-control" placeholder="Password">
        <i class="fa fa-lock input-abs-icon"></i>

    </div>

    <input type='submit' name='Submit' class="btn btn-primary btn-rounded btn-iconed" value='Submit'/>


    <div class="no-account-yet">
        No tenes una cuenta todavia? <a href="{$root}/signup" >Registrate ahora</a>
    </div>

</form>