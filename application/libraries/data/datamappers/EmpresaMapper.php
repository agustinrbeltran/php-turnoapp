<?php

namespace data\datamappers;


use business_logic\entities\Empresa,
    business_logic\entities\EmpresaInterface,
    data\primitives\AbstractDataMapper,
    data\primitives\DatabaseAdapterInterface,
    data\collections\EmpresaCollection;

class EmpresaMapper extends AbstractDataMapper implements EmpresaMapperInterface
{

    protected $_entityTable = "empresas";
    protected $_collection;


    public function __construct(DatabaseAdapterInterface $adapter)
    {
        parent::__construct($adapter);
        $this->_collection = new EmpresaCollection();
    }

    public function insert(EmpresaInterface $empresa, $id_administrador)
    {
        $empresa->setId(
            $this->adapter->insert(
                $this->_entityTable,
                array(
                    "nombre" => $empresa->getNombre(),
                    "id_usuario" => $id_administrador
                )
            )
        );

        return $empresa->getId();
    }

    public function update(EmpresaInterface $empresa)
    {
        $id_empresa = $empresa->getId();
        $confirm = $this->adapter->update(
            $this->_entityTable,
            array(
                "nombre" => $empresa->getNombre()
            ),
            "id = $id_empresa"
        );
        return $confirm;
    }

    public function delete($id)
    {
        if ($id instanceof EmpresaInterface) {
            $id = $id->getId();
        }
        return $this->adapter->delete($this->_entityTable, "id = $id");
    }

    protected function createEntity(array $row)
    {

        $empresa = new Empresa($row["nombre"]);
        $empresa->setId($row["id"]);
        return $empresa;
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