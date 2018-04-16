<?php

namespace data\primitives;

abstract class AbstractDataMapper
{
    protected $adapter;
    protected $_entityTable;

    public function __construct(DatabaseAdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function getAdapter()
    {
        return $this->adapter;
    }

    public function findById($id)
    {
        $this->adapter->select($this->_entityTable,
            array('id' => $id));

        if (!$row = $this->adapter->fetch()) {
            return null;
        }

        return $this->createEntity($row);
    }

    /*
    public function findAll(array $conditions = array())
    {
        $entities = array();
        $this->adapter->select($this->_entityTable, $conditions);
        $rows = $this->adapter->fetchAll();

        if ($rows) {
            foreach ($rows as $row) {
                $entities[] = $this->createEntity($row);
            }
        }

        return $entities;
    }*/

    public function findAll(array $conditions = array())
    {

        $this->adapter->select($this->_entityTable, $conditions);
        $rows = $this->adapter->fetchAll();
        return $this->createCollection($rows);

    }

    abstract protected function createCollection(array $rows);

    // Create an entity (implementation delegated to concrete mappers)
    abstract protected function createEntity(array $row);
}

?>