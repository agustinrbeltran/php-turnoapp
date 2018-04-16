<?php

include_once("../../../Autoloader.php");

use business_logic\test\entities\MarcaDeTiempoTest,
    business_logic\test\entities\TicketeraTest,
    business_logic\test\entities\SucursalTest,
    business_logic\test\entities\UsuarioSucursalTest,
    business_logic\test\entities\EmpresaTest;

?>


<!DOCTYPE html>
<html>
<body>

<h1>Tests Unitarios de cada entidad</h1>

<strong><p>Test MarcaDeTiempoTest.php : </p></strong>
<?php
$marcaDeTiempoTest = new MarcaDeTiempoTest();
//Prueba de los metodos mas importantes
$marcaDeTiempoTest->getTimeStampTest();
$marcaDeTiempoTest->idTest();
?>

<strong><p>Test TicketeraTest.php</p></strong>
<?php
$ticketera = new TicketeraTest();
//Prueba de los metodos mas importantes
$ticketera->aumentarTurnoTest();
$ticketera->reiniciarTest();
?>

<strong><p>Test SucursalTest.php</p></strong>
<?php
$sucursal = new SucursalTest();
//Prueba de los metodos mas importantes
$sucursal->idTest();
$sucursal->getNombreTest();
?>

<strong><p>Test UsuarioSucursalTest.php</p></strong>
<?php
$usuarioSucursal = new UsuarioSucursalTest();
//Prueba de los metodos mas importantes
$usuarioSucursal->idTest();
$usuarioSucursal->getNombreTest();
$usuarioSucursal->getApellidoTest();
$usuarioSucursal->getUsernameTest();
$usuarioSucursal->getPasswordTest();
$usuarioSucursal->getEmailTest();
?>

<strong><p>Test EmpresaTest.php</p></strong>
<?php
$empresaTest = new EmpresaTest();
//Prueba de los metodos mas importantes
$empresaTest->idTest();
$empresaTest->getNombreTest();
?>

</body>
</html>
