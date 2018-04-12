<?php

namespace data\datamappers;

use business_logic\entities\UsuarioSucursal,
    data\primitives\DatabaseAdapterInterface,
    data\primitives\AbstractDataMapper,
    data\collections\UsuarioSucursalCollection;


class UsuarioSucursalMapper extends AbstractDataMapper implements  UsuarioSucursalMapperInterface
{

    protected $_entityTable = "usuarios";
    protected $_collection ;


    public function __construct(DatabaseAdapterInterface $adapter) {
        parent::__construct($adapter);
        $this->_collection = new UsuarioSucursalCollection();

    }

    public function insert(UsuarioSucursal $usuarioSucursal){
        $usuarioSucursal->setId(
            $this->adapter->insert(
                $this->_entityTable,
                array(
                    "nombre" => $usuarioSucursal->getNombre(),
                    "apellido" => $usuarioSucursal->getApellido(),
                    "email" => $usuarioSucursal->getEmail(),
                    "username" => $usuarioSucursal->getUsername(),
                    "password" => $usuarioSucursal->getPassword(),
                    "tipo" => 1 , //tipo 1 es para usuarios de sucursal, 2 para los administradores
                    "id_sucursal" => $usuarioSucursal->getIdSucursal()
                )
            )
        );

        return $usuarioSucursal->getId();
    }

    public function update (UsuarioSucursal $usuarioSucursal)
    {
        $id_usr_sucursal = $usuarioSucursal->getId();
        $confirm= $this->adapter->update(
            $this->_entityTable,
            array(
                "nombre" => $usuarioSucursal->getNombre(),
                "apellido" => $usuarioSucursal->getApellido(),
                "email" => $usuarioSucursal->getEmail(),
                "username" => $usuarioSucursal->getUsername(),
                "password" => $usuarioSucursal->getPassword()
            ),
            "id = $id_usr_sucursal"
        );
        return $confirm;
    }

    public function delete($id) {
        if ($id instanceof UsuarioSucursal) {
            $id = $id->getId();
        }
        return $this->adapter->delete($this->_entityTable,"id = $id");
    }

    protected function createEntity(array $row) {
        $usuarioSucursal = new UsuarioSucursal($row["nombre"], $row["apellido"], $row["email"], $row["username"], $row["password"]);
        $usuarioSucursal->setId($row["id"]);
        $usuarioSucursal->setIdSucursal($row["id_sucursal"]);

        return $usuarioSucursal;
    }

    //metodo sobreescrito
    public function findById($id)
    {
        $this->adapter->select($this->_entityTable,
            array('id' => $id , 'tipo'=> 1));

        if (!$row = $this->adapter->fetch()) {
            return null;
        }

        return $this->createEntity($row);
    }

    //metodo sobreescrito
    public function findAll(array $conditions = array()) {

        $conditions['tipo']=1;
        $this->adapter->select($this->_entityTable, $conditions);
        $rows = $this->adapter->fetchAll();
        return $this->createCollection($rows);

    }

    protected function createCollection(array $rows)
    {
        $this->_collection->clear();
        if ($rows) {
            foreach ($rows as $row) {
                $this->_collection[] = $this->createEntity($row);
            }
        }
        return $this->_collection;
    }

}
?>