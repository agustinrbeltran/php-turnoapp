<?php

namespace data\test;


use business_logic\entities\Ticketera,
    data\factory\EntityMapperFactory;

class TicketeraMapperTest {

    private $ticketeraMapper;

    function __construct()
    {
        $this->ticketeraMapper = EntityMapperFactory::getTicketeraMapper();
    }

    public function insertTest()
    {
        echo "insertTest():"."<br>";

        for ($i=1;$i<15;$i++)
        {
            $ticketera = new Ticketera();
            $ticketera->setTurno(3*$i);
            $ticketera->setPromedio(4*$i);
            $id_ticketera = $this->ticketeraMapper->insert($ticketera,1);
            echo "-Ticketera creada => id=".$id_ticketera." , Turno=".$ticketera->getTurno()." , Promedio=".$ticketera->getPromedio()."<br>";
        }
        echo ""."<br>";
    }

    public function updateTest()
    {
        $ticketera = new Ticketera();
        $ticketera->setId(1);
        $ticketera->setTurno(102);
        $ticketera->setPromedio(4);
        $this->ticketeraMapper->update($ticketera);
        echo "updateTest():"."<br>";
        echo "-Ticketera actualizada => id=".$ticketera->getId()." , Turno=".$ticketera->getTurno()." , Promedio=".$ticketera->getPromedio()."<br><br>";
    }


    public function findByIdTest()
    {
        $ticketera = new Ticketera();
        $ticketera->setTurno(3);
        $ticketera->setPromedio(4);
        $id_ticketera = $this->ticketeraMapper->insert($ticketera,1);
        echo "findByIdTest():"."<br>";
        echo "-Ticketera creada => id=".$id_ticketera." , Turno=".$ticketera->getTurno()." , Promedio=".$ticketera->getPromedio()."<br>";
        $ticketera2= $this->ticketeraMapper->findById($id_ticketera);
        echo "-Ticketera recuperada => id=".$ticketera2->getId()." , Turno=".$ticketera2->getTurno()." , Promedio=".$ticketera2->getPromedio()."<br><br>";
    }

    public function findAllTest()
    {
        echo "findAllTest():"."<br>";
        $collection= $this->ticketeraMapper->findAll(array("id_sucursal"=>1));
        $ticketeras = $collection->toArray();
        foreach ($ticketeras as $ticketera)
        {
            echo "-Ticketera  => id=".$ticketera->getId()." , Turno=".$ticketera->getTurno()." , Promedio=".$ticketera->getPromedio()."<br>";
        }
        echo ""."<br>";

    }

    public function deleteTest()
    {
        echo "deleteTest():"."<br>";
        $ticketera = new Ticketera();
        $ticketera->setTurno(109);
        $ticketera->setPromedio(2304);
        $id_ticketera = $this->ticketeraMapper->insert($ticketera,1);
        echo "-Ticketera creada => id=".$id_ticketera." , Turno=".$ticketera->getTurno()." , Promedio=".$ticketera->getPromedio()."<br>";
        $this->ticketeraMapper->delete($id_ticketera);
        echo "-Ticketera borrada => id=".$id_ticketera."<br><br>";
    }


}