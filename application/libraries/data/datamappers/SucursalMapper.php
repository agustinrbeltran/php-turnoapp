<?php

namespace data\datamappers;


use business_logic\entities\Sucursal,
    business_logic\entities\SucursalInterface,
    data\primitives\DatabaseAdapterInterface,
    data\primitives\AbstractDataMapper,
    data\collections\SucursalCollection;

class SucursalMapper extends AbstractDataMapper implements SucursalMapperInterface
{

    protected $_entityTable = "sucursales";
    protected $_collection;


    public function __construct(DatabaseAdapterInterface $adapter)
    {
        parent::__construct($adapter);
        $this->_collection = new SucursalCollection();

    }

    public function insert(SucursalInterface $sucursal, $id_empresa)
    {
        $sucursal->setId(
            $this->adapter->insert(
                $this->_entityTable,
                array(
                    "nombre" => $sucursal->getNombre(),
                    "id_empresa" => $id_empresa,
                    "direccion" => $sucursal->getDireccion(),
                    "ciudad" => $sucursal->getCiudad()
                )
            )
        );

        return $sucursal->getId();
    }

    public function update(SucursalInterface $sucursal)
    {
        $id_sucursal = $sucursal->getId();
        $confirm = $this->adapter->update(
            $this->_entityTable,
            array(
                "nombre" => $sucursal->getNombre(),
                "direccion" => $sucursal->getDireccion(),
                "ciudad" => $sucursal->getCiudad()
            ),
            "id = $id_sucursal"
        );
        return $confirm;
    }

    public function delete($id)
    {
        if ($id instanceof SucursalInterface) {
            $id = $id->getId();
        }
        return $this->adapter->delete($this->_entityTable, "id = $id");
    }

    protected function createEntity(array $row)
    {

        $sucursal = new Sucursal($row["nombre"], $row["direccion"], $row["ciudad"]);
        $sucursal->setId($row["id"]);
        return $sucursal;
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