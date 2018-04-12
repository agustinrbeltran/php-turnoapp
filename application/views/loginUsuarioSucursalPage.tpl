<!DOCTYPE html>
<html>

{include file="common/common_header.tpl"}

<body class="glossed">

<div class="all-wrapper no-menu-wrapper light-bg">

    <div class="login-logo-w">
        <a href="loginPage.php"  class="logo">
            <i class="fa fa-rocket"></i>
        </a>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <div class="widget widget-blue">
                <div class="widget-title">
                    <h3 class="text-center"><i class="fa fa-lock"></i> Login para Usuarios de Sucursal </h3>
                </div>
                <div class="widget-content">


                    {include file= 'loginUsuarioSucursalPage/loginForm.tpl'}



                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>
