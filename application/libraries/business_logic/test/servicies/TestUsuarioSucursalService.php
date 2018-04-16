<?php

require_once("../../../Autoloader.php");

use business_logic\servicies\UsuarioSucursalService;

$id_sucursal = 1;

$serviceTest = new UsuarioSucursalService($id_sucursal);

$id_t1 = $serviceTest->crearTicketera();
$id_t2 = $serviceTest->crearTicketera();
$id_t3 = $serviceTest->crearTicketera();
$id_t4 = $serviceTest->crearTicketera();
$id_t5 = $serviceTest->crearTicketera();

$serviceTest->aumentarTurno($id_t1);
sleep(2);
$serviceTest->aumentarTurno($id_t1);
sleep(3);
$serviceTest->aumentarTurno($id_t1);
sleep(5);
$serviceTest->aumentarTurno($id_t1);
sleep(1.1);
$serviceTest->aumentarTurno($id_t1);

$ticketeras = $serviceTest->getTicketeras();

foreach ($ticketeras as $ticketera) {
    echo "ID = " . $ticketera->getId() . " Turno = " . $ticketera->getTurno() . " Promedio = " . $ticketera->getPromedio() . "<br>";
}

$serviceTest->reiniciar($id_t1);

$ticketera = $serviceTest->getTicketera($id_t1);

echo "Reiniciar:  ID = " . $ticketera->getId() . " Turno = " . $ticketera->getTurno() . " Promedio = " . $ticketera->getPromedio() . "<br>";


?>

