<form id="reg"  role="form" method='post' action="{$root}/signup/signup_validation">

    <div class="lined-separator">Registrate</div>

    {$validation_errors}

    <div class="form-group relative-w">

        <input  name='nombre' required="required" type="text" class="form-control" placeholder="Nombre">
        <i class="fa fa-user input-abs-icon"></i>

    </div>

    <div class="form-group relative-w">

        <input name='apellido' required="required" type="text" class="form-control" placeholder="Apellido">
        <i class="fa fa-user input-abs-icon"></i>

    </div>

    <div class="form-group relative-w">

        <input  name='email' required="email" type="email" class="form-control" placeholder="Enter email">
        <i class="fa fa-envelope-alt input-abs-icon"></i>

    </div>

    <div class="form-group relative-w">

        <input  name='password' type="password" required="password" class="form-control" placeholder="Password">
        <i class="fa fa-lock input-abs-icon"></i>

    </div>

    <div class="form-group relative-w">

        <input  name='cpassword' type="password" required="cpassword" class="form-control" placeholder="Confirm Password">
        <i class="fa fa-lock input-abs-icon"></i>

    </div>

    <input type='submit' name='Submit' class="btn btn-success btn-rounded btn-iconed" value='Submit'/>

    <div class="no-account-yet">
        Ya estas registrado? <a href="{$root}/login">Login</a>
    </div>
</form>