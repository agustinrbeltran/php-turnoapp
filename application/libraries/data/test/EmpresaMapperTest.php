<?php

namespace data\test;


use business_logic\entities\Empresa,
    data\factory\EntityMapperFactory;

class EmpresaMapperTest
{

    private $_empresaMapper;

    function __construct()
    {
        $this->_empresaMapper = EntityMapperFactory::getEmpresaMapper();
    }

    public function insertTest()
    {
        $empresa = new Empresa("Microsoft");

        $id_empresa = $this->_empresaMapper->insert($empresa, 1 /* administrador 1 */);

        echo "insertTest():" . "<br>";
        echo "Empresa creada: id=" . $id_empresa . ", nombre=" . $empresa->getNombre() . "<br>";

    }

    public function updateTest()
    {
        echo "updateTest():" . "<br>";

        $empresa = new Empresa("Casa Tia");
        $id_empresa = $this->_empresaMapper->insert($empresa, 1 /* administrador 1 */);
        echo "Empresa creada: id=" . $id_empresa . ", nombre=" . $empresa->getNombre() . "<br>";

        $empresa->setNombre("La Anonima");

        $this->_empresaMapper->update($empresa);
        echo "Empresa actualizada: id=" . $id_empresa . ", nombre=" . $empresa->getNombre() . "<br>";
    }

    public function deleteTest()
    {
        echo "deleteTest():" . "<br>";
        $empresa = new Empresa("La Madrilena");
        $id_empresa = $this->_empresaMapper->insert($empresa, 1 /* administrador 1 */);
        echo "Empresa creada: id=" . $id_empresa . ", nombre=" . $empresa->getNombre() . "<br>";
        echo "Borrado: " . $this->_empresaMapper->delete($id_empresa) . "<br>";
    }

    public function findByIdTest()
    {
        echo "findByIdTest():" . "<br>";
        $empresa = $this->_empresaMapper->findById(1);
        echo "Empresa encontrada: id=" . $empresa->getId() . ", nombre=" . $empresa->getNombre() . "<br>";

    }

    public function findAllTest()
    {
        echo "findAllTest():" . "<br>";
        $collection = $this->_empresaMapper->findAll(array("id_usuario" => 1));
        $empresas = $collection->toArray();
        foreach ($empresas as $empresa) {
            echo "Empresa: id=" . $empresa->getId() . ", nombre=" . $empresa->getNombre() . "<br>";
        }
        echo "" . "<br>";
    }

}