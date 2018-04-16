<?php

namespace data\datamappers;

use business_logic\entities\MarcaDeTiempo,
    business_logic\entities\MarcaDeTiempoInterface,
    data\primitives\DatabaseAdapterInterface,
    data\primitives\AbstractDataMapper,
    data\collections\MarcaTiempoCollection;

class MarcaDeTiempoMapper extends AbstractDataMapper implements MarcaDeTiempoMapperInterface
{
    protected $_entityTable = "timestamps";
    protected $_collection;


    public function __construct(DatabaseAdapterInterface $adapter)
    {
        parent::__construct($adapter);
        $this->_collection = new MarcaTiempoCollection();

    }

    public function insert(MarcaDeTiempoInterface $marcaDeTiempo, $id_ticketera)
    {
        $marcaDeTiempo->setId(
            $this->adapter->insert(
                $this->_entityTable,
                array(
                    "ts" => $marcaDeTiempo->getTimestamp(),
                    "id_ticketera" => $id_ticketera
                )
            )
        );

        return $marcaDeTiempo->getId();
    }

    public function delete($id)
    {
        if ($id instanceof MarcaDeTiempoInterface) {
            $id = $id->getId();
        }
        return $this->adapter->delete($this->_entityTable, "id = $id");
    }

    public function deleteAll($id_ticketera)
    {

        return $this->adapter->delete($this->_entityTable, "id_ticketera = $id_ticketera");
    }


    protected function createEntity(array $row)
    {
        $marcaDeTiempo = new MarcaDeTiempo();
        $marcaDeTiempo->setTimestamp($row["ts"]);
        $marcaDeTiempo->setId($row["id"]);
        return $marcaDeTiempo;

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