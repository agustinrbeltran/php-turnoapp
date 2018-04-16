<?php

namespace data\test;


use business_logic\entities\UsuarioSucursal,
    data\factory\EntityMapperFactory;

class UsuarioSucursalMapperTest
{

    private $_usuarioSucursalMapper;

    function __construct()
    {
        $this->_usuarioSucursalMapper = EntityMapperFactory::getUsuarioDeSucursalMapper();
    }

    public function insertTest()
    {
        $usuarioSucursal = new UsuarioSucursal("juan", "garcia", "juangarcia@gmail.com", "juangarcia", "juangarcia1234");
        $usuarioSucursal->setIdSucursal(1);
        $id_usuario = $this->_usuarioSucursalMapper->insert($usuarioSucursal);

        echo "insertTest():" . "<br>";
        echo "Usuario creado: id=" . $id_usuario . ", nombre=" . $usuarioSucursal->getNombre(), ", apellido=" . $usuarioSucursal->getApellido() . "<br>";

    }

    public function updateTest()
    {
        echo "updateTest():" . "<br>";

        $usuarioSucursal = new UsuarioSucursal("juan", "garcia", "juangarcia@gmail.com", "juangarcia", "juangarcia1234");
        $usuarioSucursal->setIdSucursal(1);
        $id_usuario = $this->_usuarioSucursalMapper->insert($usuarioSucursal);
        echo "Usuario creado: id=" . $id_usuario . ", nombre=" . $usuarioSucursal->getNombre(), ", apellido=" . $usuarioSucursal->getApellido() . "<br>";

        $usuarioSucursal->setApellido("Apellido cambiado");
        $usuarioSucursal->setNombre("Nombre cambiado");

        $this->_usuarioSucursalMapper->update($usuarioSucursal);
        echo "Usuario actualizado: id=" . $id_usuario . ", nombre=" . $usuarioSucursal->getNombre(), ", apellido=" . $usuarioSucursal->getApellido() . "<br>";
    }

    public function deleteTest()
    {
        echo "deleteTest():" . "<br>";
        $usuarioSucursal = new UsuarioSucursal("Pedro", "Gomez", "pedrogomez@gmail.com", "pedrogomez", "pedrogomez1234");
        $usuarioSucursal->setIdSucursal(1);
        $id_usuario = $this->_usuarioSucursalMapper->insert($usuarioSucursal);
        echo "Usuario creado: id=" . $id_usuario . ", nombre=" . $usuarioSucursal->getNombre(), ", apellido=" . $usuarioSucursal->getApellido() . "<br>";
        echo "Borrado: " . $this->_usuarioSucursalMapper->delete($id_usuario) . "<br>";
    }

    public function findByIdTest()
    {
        echo "findByIdTest():" . "<br>";
        $usuarioSucursal = $this->_usuarioSucursalMapper->findById(2);
        echo "Usuario encontrado: id=" . $usuarioSucursal->getId() . ", nombre=" . $usuarioSucursal->getNombre(), ", apellido=" . $usuarioSucursal->getApellido() . "<br>";

    }

    public function findAllTest()
    {
        echo "findAllTest():" . "<br>";
        $collection = $this->_usuarioSucursalMapper->findAll(array("id_sucursal" => 1));
        $usuariosSucursal = $collection->toArray();
        foreach ($usuariosSucursal as $usuarioSucursal) {
            echo "-Usuario  => id=" . $usuarioSucursal->getId() . " , Nombre=" . $usuarioSucursal->getNombre() . " , Apellido=" . $usuarioSucursal->getApellido() . "<br>";
        }
        echo "" . "<br>";

    }


}