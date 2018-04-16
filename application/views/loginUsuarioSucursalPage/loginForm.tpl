<form id='login' role="form" method='post' accept-charset='UTF-8' action={$login_usr_sucursal_page}>

    <div class="lined-separator">Logueate con tu usuario y contraseña</div>


    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <div>
        <span class="error">
            {$error}
        </span>
    </div>
    <br>

    <div class="form-group relative-w">

        <input id='username' type="text" name='username' class="form-control" placeholder="Username"
               value={$display_username}>
        <span id='login_username_errorloc' class="error"></span>
        <i class="fa fa-user input-abs-icon"></i>

    </div>


    <div class="form-group relative-w">

        <input id='password' type="password" name='password' class="form-control" placeholder="Password">
        <span id='login_password_errorloc' class="error"></span>
        <i class="fa fa-lock input-abs-icon"></i>

    </div>

    <input type='submit' name='Submit' class="btn btn-primary btn-rounded btn-iconed" value='Submit'/>

    <div class="no-account-yet">
        Si sos administrador <a href={$login_page}>logueate aqui</a>
    </div>

</form>


<script>
    // <![CDATA[

    var frmvalidator = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username", "req", "Por favor ingrese su username");

    frmvalidator.addValidation("password", "req", "Por favor ingrese el password");

    // ]]>
</script>
