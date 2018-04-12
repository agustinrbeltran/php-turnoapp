<?php

namespace data\datamappers;

use business_logic\entities\Ticketera,
    business_logic\entities\TicketeraInterface,
    data\primitives\DatabaseAdapterInterface,
    data\primitives\AbstractDataMapper,
    data\collections\TicketeraCollection;


class TicketeraMapper extends AbstractDataMapper implements  TicketeraMapperInterface
{

    protected $_entityTable = "ticketeras";
    protected $_collection;


    public function __construct(DatabaseAdapterInterface $adapter) {
        parent::__construct($adapter);
        $this->_collection = new TicketeraCollection();
    }

    public function insert(TicketeraInterface $ticketera, $id_sucursal) {
        $ticketera->setId(
            $this->adapter->insert(
                $this->_entityTable,
                        array(
                            "turno" => $ticketera->getTurno(),
                            "promedio" => $ticketera->getPromedio(),
                            "id_sucursal" => $id_sucursal
                        )
            )
        );
        return $ticketera->getId();
    }

    public function update (TicketeraInterface $ticketera)
    {
        $id_ticketera = $ticketera->getId();
        $confirm= $this->adapter->update(
            $this->_entityTable,
            array(
                "turno" => $ticketera->getTurno(),
                "promedio" => $ticketera->getPromedio()
            ),
            "id = $id_ticketera"
        );
        return $confirm;
    }

    public function delete($id) {
        if ($id instanceof TicketeraInterface) {
            $id = $id->getId();
        }
        return $this->adapter->delete($this->_entityTable,"id = $id");
    }

    protected function createEntity(array $row) {
        $ticketera = new Ticketera();
        $ticketera->setTurno($row["turno"]);
        $ticketera->setPromedio($row["promedio"]);
        $ticketera->setId($row["id"]);
        return $ticketera;
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