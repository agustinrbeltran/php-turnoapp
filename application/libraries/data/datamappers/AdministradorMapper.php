<?php

namespace data\datamappers;

use data\primitives\AbstractDataMapper,
    data\primitives\DatabaseAdapterInterface,
    business_logic\entities\Administrador,
    data\collections\AdministradorCollection;


class AdministradorMapper extends AbstractDataMapper implements  AdministradorMapperInterface
{

    protected $_entityTable = "usuarios";
    protected $_collection;

    public function __construct(DatabaseAdapterInterface $adapter) {
        parent::__construct($adapter);
        $this->_collection = $collection = new AdministradorCollection();
    }

    public function insert(Administrador $administrador){
        $administrador->setId(
            $this->adapter->insert(
                $this->_entityTable,
                array(
                    "nombre" => $administrador->getNombre(),
                    "apellido" => $administrador->getApellido(),
                    "email" => $administrador->getEmail(),
                    "username" => $administrador->getUsername(),
                    "password" => $administrador->getPassword(),
                    "tipo" => 2 , //tipo 1 es para usuarios de sucursal, 2 para los administradores
                )
            )
        );

        return $administrador->getId();
    }

    public function update (Administrador $administrador)
    {
        $id_administrador = $administrador->getId();
        $confirm= $this->adapter->update(
            $this->_entityTable,
            array(
                "nombre" => $administrador->getNombre(),
                "apellido" => $administrador->getApellido(),
                "email" => $administrador->getEmail(),
                "username" => $administrador->getUsername(),
                "password" => $administrador->getPassword()
            ),
            "id = $id_administrador"
        );
        return $confirm;
    }

    public function delete($id) {
        if ($id instanceof Administrador) {
            $id = $id->getId();
        }
        return $this->adapter->delete($this->_entityTable,"id = $id");
    }

    protected function createEntity(array $row) {
        $administrador = new Administrador($row["nombre"], $row["apellido"], $row["email"], $row["username"], $row["password"]);
        $administrador->setId($row["id"]);
        return $administrador;
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

    //metodo sobreescrito
    public function findById($id)
    {
        $this->adapter->select($this->_entityTable,
            array('id' => $id , 'tipo'=> 2));

        if (!$row = $this->adapter->fetch()) {
            return null;
        }

        return $this->createEntity($row);
    }

    //metodo sobreescrito
    public function findAll(array $conditions = array()) {

        $conditions['tipo']=2;
        $this->adapter->select($this->_entityTable, $conditions);
        $rows = $this->adapter->fetchAll();
        return $this->createCollection($rows);

    }

}
?>