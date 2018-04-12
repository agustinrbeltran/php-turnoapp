<?php

namespace data\test;


use business_logic\entities\Administrador,
    data\factory\EntityMapperFactory;

class AdministradorMapperTest {

    private $_administradorMapper;

    function __construct()
    {
        $this->_administradorMapper = EntityMapperFactory::getAdministradorMapper();
    }

    public function insertTest()
    {
        $administrador = new Administrador("Agustin","Renteria","oveja1987@gmail.com","oveja1987","1234");

        $id_administrador = $this->_administradorMapper->insert($administrador);

        echo "insertTest():"."<br>";
        echo "Administrador creado: id=".$id_administrador.", nombre=".$administrador->getNombre().", apellido=".$administrador->getApellido()."<br>";

    }

    public function updateTest()
    {
        echo "updateTest():"."<br>";

        $administrador = new Administrador("Juan","De los Palotes","juan@gmail.com","juan","1234");
        $id_administrador = $this->_administradorMapper->insert($administrador);
        echo "Administrador creado: id=".$id_administrador.", nombre=".$administrador->getNombre().", apellido=".$administrador->getApellido()."<br>";

        $administrador->setNombre("Juancho");

        $this->_administradorMapper->update($administrador);
        echo "Administrador actualizado: id=".$id_administrador.", nombre=".$administrador->getNombre().", apellido=".$administrador->getApellido()."<br>";
    }

    public function deleteTest()
    {
        echo "deleteTest():"."<br>";
        $administrador = new Administrador("Ramon","De los Ramones","ramon@gmail.com","ramon","1234");
        $id_administrador = $this->_administradorMapper->insert($administrador);
        echo "Administrador creado: id=".$id_administrador.", nombre=".$administrador->getNombre().", apellido=".$administrador->getApellido()."<br>";
        echo "Borrado: ".$this->_administradorMapper->delete($administrador)."<br>";
    }

    public  function findByIdTest()
    {
        echo "findByIdTest():"."<br>";
        $administrador = $this->_administradorMapper->findById(1);
        echo "Administrador creado: id=".$administrador->getId().", nombre=".$administrador->getNombre().", apellido=".$administrador->getApellido()."<br>";

    }

    public function findAllTest()
    {
        echo "findAllTest():"."<br>";
        $collection= $this->_administradorMapper->findAll();
        $administradores = $collection->toArray();
        foreach ($administradores as $administrador)
        {
            echo "Administrador: id=".$administrador->getId().", nombre=".$administrador->getNombre().", apellido=".$administrador->getApellido()."<br>";
        }
        echo ""."<br>";
    }

}