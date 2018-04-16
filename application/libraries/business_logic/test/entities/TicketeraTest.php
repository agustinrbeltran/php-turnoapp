<?php

namespace business_logic\test\entities;

use business_logic\factory\ObjectFactory;

class TicketeraTest
{

    private $ticketera;

    function __construct()
    {
        $this->ticketera = ObjectFactory::crearTicketera();
    }

    public function aumentarTurnoTest()
    {
        echo "aumentarTurnoTest():" . "<br>";
        $this->ticketera->aumentarTurno();
        sleep(3);
        $this->ticketera->aumentarTurno();
        sleep(3);
        $this->ticketera->aumentarTurno();
        sleep(1);
        $this->ticketera->aumentarTurno();


        echo "-Turno=" . $this->ticketera->getTurno() . "<br>";
        echo "-Promedio=" . $this->ticketera->getPromedio() . "<br>";
    }

    public function reiniciarTest()
    {
        echo "reiniciarTest():" . "<br>";
        $this->ticketera->reiniciar();
        echo "-Turno=" . $this->ticketera->getTurno() . "<br>";
        echo "-Promedio=" . $this->ticketera->getPromedio() . "<br>";
    }

}

?>