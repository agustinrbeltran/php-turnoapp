<?php

namespace data\test;

use data\factory\EntityMapperFactory,
    business_logic\entities\MarcaDeTiempo;

class MarcaDeTiempoMapperTest
{

    private $marcaDeTiempoMapper;

    function __construct()
    {

        $this->marcaDeTiempoMapper = EntityMapperFactory::getMarcaDeTiempoMapper();

    }

    public function insertTest()
    {
        $marcaDeTiempo = new MarcaDeTiempo();
        $id_marcaDeTiempo = $this->marcaDeTiempoMapper->insert($marcaDeTiempo, /*id de ticketera*/
            1);
        echo "insertTest():" . "<br>";
        echo "Marca de tiempo: Timestamp=" . $marcaDeTiempo->getTimestamp() . "<br>";
        if ($id_marcaDeTiempo !== null) {
            echo("Funciono correctamente! El id de la marca de tiempo insertada es=" . $id_marcaDeTiempo . " <br> ");
        } else {
            echo("Algo salio mal! " . "<br>");
        }
    }

    public function deleteTest()
    {
        $marcaDeTiempo = new MarcaDeTiempo();
        $id_marcaDeTiempo = $this->marcaDeTiempoMapper->insert($marcaDeTiempo, /*id de ticketera*/
            1);
        echo("deleteTest():" . "<br>");
        if ($id_marcaDeTiempo !== null) {
            echo("El id de la marca de tiempo insertada es=" . $id_marcaDeTiempo . "<br> ");
        } else {
            echo("Algo salio mal! " . "<br>");
        }
        $id = $this->marcaDeTiempoMapper->delete($id_marcaDeTiempo);
        if ($id !== null) {
            echo("El id de la marca de tiempo eliminada es=" . $id . " <br> ");
        } else {
            echo("Algo salio mal!" . "<br>");
        }
    }

    public function findByIdTest()
    {
        $marca = $this->marcaDeTiempoMapper->findById(1);
        echo "FindByIdTest():" . "<br>";
        echo " Marca de tiempo recuperada (ID=1)=> Timestamp=" . $marca->getTimestamp() . "<br>";
    }

    public function findAllTest()
    {
        echo "findAllTest():" . "<br>";
        $collection = $this->marcaDeTiempoMapper->findAll(array("id_ticketera" => 1));
        $marcasDeTiempo = $collection->toArray();
        foreach ($marcasDeTiempo as $marca) {
            echo("Marca " . $marca->getId() . " - Timestamp" . $marca->getTimestamp() . "<br>");
        }
    }

}