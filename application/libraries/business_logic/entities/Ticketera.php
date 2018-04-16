<?php
namespace business_logic\entities;

use BadMethodCallException, InvalidArgumentException, business_logic\factory\ObjectFactory;

class Ticketera implements TicketeraInterface
{

    private $_id;
    private $_promedioTiempo;
    private $_turno;
    private $_marcasDeTiempo;

    function __construct()
    {
        $this->_marcasDeTiempo = ObjectFactory::crearCollection();
        $this->setTurno(0);
        $this->setPromedio(0);
    }

    public function setId($id)
    {
        if ($this->_id !== null) {
            throw new BadMethodCallException(
                "El id para esta ticketera ya ha sido seteado.");
        }

        if (!is_int($id) || $id < 1) {
            throw new InvalidArgumentException("El id de esta ticketera es invalido.");
        }

        $this->_id = $id;
        return $this;
    }

    public function getId()
    {
        return $this->_id;
    }


    public function aumentarTurno()
    {
        $this->setTurno($this->getTurno() + 1);
        $this->calcularPromedio();
        return $this->getTurno();
    }

    public function setPromedio($promedio)
    {
        $this->_promedioTiempo = $promedio;
    }

    public function getPromedio()
    {
        return $this->_promedioTiempo;
    }

    public function setTurno($turno)
    {
        $this->_turno = $turno;
    }

    public function getTurno()
    {
        return $this->_turno;
    }

    public function setMarcasDeTiempo($marcasDeTiempoArray)
    {
        $this->_marcasDeTiempo->setArray($marcasDeTiempoArray);
    }

    public function getMarcasDeTiempo()
    {
        return $this->_marcasDeTiempo->getArray();
    }

    public function reiniciar()
    {
        $this->setTurno(0);
        $this->setPromedio(0);
        $this->_marcasDeTiempo->reset();
    }

    private function calcularPromedio()
    {
        $array = $this->_marcasDeTiempo->getArray();
        $tamaño = $this->_marcasDeTiempo->tamaño();
        $array2 = array();
        if ($tamaño == 1) {
            $this->setPromedio(0);
        } else {
            for ($i = 0; $i < $tamaño - 1; $i++) {
                $array2[$i] = abs($array[$i + 1]->getTimestamp() - $array[$i]->getTimestamp());
            }
            $this->setPromedio(array_sum($array2) / ($tamaño - 1));
        }
    }
}

?>
