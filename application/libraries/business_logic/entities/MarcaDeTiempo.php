<?php

namespace business_logic\entities;

use DateTime, BadMethodCallException, InvalidArgumentException;


class MarcaDeTiempo implements MarcaDeTiempoInterface
{

    private $_id;
    private $_timestamp;

    function __construct()
    {
        $this->makeTimestamp();
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

    private function makeTimestamp()
    {
        if ($this->getTimestamp() != null) {
            throw new BadMethodCallException(
                "El timestamp ya ha sido seteado.");
        }

        $date = new DateTime();
        $this->_timestamp = $date->getTimestamp();
    }

    public function setTimestamp($timestamp)
    {
        $this->_timestamp = $timestamp;
    }

    public function getTimestamp()
    {
        return $this->_timestamp;
    }

}

?>