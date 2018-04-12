<?php

include_once("../../Autoloader.php");

use data\test\MarcaDeTiempoMapperTest,
    data\test\TicketeraMapperTest,
    data\test\UsuarioSucursalMapperTest,
    data\test\EmpresaMapperTest,
    data\test\AdministradorMapperTest;
?>


<!DOCTYPE html>
<html>
    <body>

    <h1>Tests Unitarios de cada datamapper</h1>

    <strong><p>Test MarcaDeTiempoMapperTest.php : </p></strong>
    <?php
    $marcaDeTiempoMapperTest= new MarcaDeTiempoMapperTest();
    $marcaDeTiempoMapperTest->insertTest();
    $marcaDeTiempoMapperTest->deleteTest();
    //$marcaDeTiempoMapperTest->findByIdTest();
    $marcaDeTiempoMapperTest->findAllTest();
    ?>

    <strong><p>Test TicketeraMapperTest.php : </p></strong>
    <?php
    $ticketeraMapperTest= new TicketeraMapperTest();
    $ticketeraMapperTest->insertTest();
    $ticketeraMapperTest->updateTest();
    $ticketeraMapperTest->findByIdTest();
    $ticketeraMapperTest->findAllTest();
    $ticketeraMapperTest->deleteTest();
    ?>


    <strong><p>Test UsuarioSucusalMapperTest.php : </p></strong>
    <?php
    $usuarioSucursalMapperTest= new UsuarioSucursalMapperTest();
    $usuarioSucursalMapperTest->insertTest();
    $usuarioSucursalMapperTest->updateTest();
    $usuarioSucursalMapperTest->deleteTest();
    $usuarioSucursalMapperTest->findByIdTest();
    $usuarioSucursalMapperTest->findAllTest();
    ?>

    <strong><p>Test EmpresaMapperTest.php : </p></strong>
    <?php
    $empresaMapperTest= new EmpresaMapperTest();
    $empresaMapperTest->insertTest();
    $empresaMapperTest->updateTest();
    $empresaMapperTest->deleteTest();
    $empresaMapperTest->findByIdTest();
    $empresaMapperTest->findAllTest();
    ?>

    <strong><p>Test AdministradorMapperTest.php : </p></strong>
    <?php
    $administradorMapperTest= new AdministradorMapperTest();
    $administradorMapperTest->insertTest();
    $administradorMapperTest->updateTest();
    $administradorMapperTest->deleteTest();
    $administradorMapperTest->findByIdTest();
    $administradorMapperTest->findAllTest();
    ?>



    </body>
</html>
