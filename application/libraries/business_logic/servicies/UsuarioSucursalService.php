<?php

namespace business_logic\servicies;

use data\factory\EntityMapperFactory,
business_logic\factory\ObjectFactory;

class UsuarioSucursalService {

  private $id_sucursal;
  private $_usuario;
  private $_ticketeraMapper;
  private $_marcaTiempoMapper;
  private $_usuarioSucursalMapper;

  function __construct()
  {
    //mappers
    $this->_ticketeraMapper = EntityMapperFactory::getTicketeraMapper();
    $this->_marcaTiempoMapper = EntityMapperFactory::getMarcaDeTiempoMapper();
    $this->_usuarioSucursalMapper = EntityMapperFactory::getUsuarioDeSucursalMapper();

  }

  public function setUsuario($email)
  {
    $result = $this->_usuarioSucursalMapper->findAll(array('email'=> $email));

    if($result->count()==1){
      $this->_usuario =  $result->toArray()[0];

      $this->id_sucursal = $this->_usuario->getIdSucursal();
    }
  }

  public function getUsuario(){
    return $this->_usuario;
  }

  public function aumentarTurno($idTicketera)
  {
    //traigo la ticketera a memoria
    $ticketera = $this->_ticketeraMapper->findById($idTicketera);
    //creo una marca de tiempo
    $marcaTiempo = ObjectFactory::crearMarcaDeTiempo();
    //inserto marca de tiempo en la base
    $this->_marcaTiempoMapper->insert ($marcaTiempo, $idTicketera);
    //traigo todas las marcas de tiempo de una ticketera
    $collection = $this->_marcaTiempoMapper->findAll (array('id_ticketera'=> $idTicketera));
    //seteo las marcas de tiempo a la ticketera
    $array = $collection->toArray();
    $ticketera->setMarcasDeTiempo($array);
    //aumento el turno, por lo que se modifican los atributos TURNO Y PROMEDIO de la ticketera
    $turno = $ticketera->aumentarTurno();
    //actualizo la ticketera
    $this->_ticketeraMapper->update($ticketera);
    //devuelvo el turno
    return $turno;
  }

  public function reiniciar($id_ticketera)
  {
    //traigo la ticketera a memoria
    $ticketera = $this->_ticketeraMapper->findById($id_ticketera);
    //reinicias ticketera
    $ticketera->reiniciar();
    //actualizo la ticketera
    $this->_ticketeraMapper->update ($ticketera);
    // borro todas las marcas de la ticketera
    $this->_marcaTiempoMapper->deleteAll($id_ticketera);
  }


  public function getTicketeras()
  {
    $collection = $this->_ticketeraMapper->findAll(array("id_sucursal"=> $this->id_sucursal));
    return $collection->toArray();
  }

  public function crearTicketera()
  {
    return $this->_ticketeraMapper->insert(ObjectFactory::crearTicketera(),$this->id_sucursal);
  }

  public function borrarTicketera($id_ticketera)
  {
    return $this->_ticketeraMapper->delete($id_ticketera);
  }

  public function getTicketera($id)
  {
    return $this->_ticketeraMapper->findById($id);
  }

  public function getIdSucursal(){
    return $this->id_sucursal;
  }

}

?>
