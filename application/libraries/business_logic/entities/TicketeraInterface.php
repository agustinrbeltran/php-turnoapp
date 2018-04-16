<?php
namespace business_logic\entities;

interface TicketeraInterface
{
    public function aumentarTurno();

    public function setPromedio($promedio);

    public function getPromedio();

    public function setTurno($turno);

    public function getTurno();

    public function reiniciar();

    public function setId($id);

    public function getId();

    public function setMarcasDeTiempo($marcasDeTiempoArray);

    public function getMarcasDeTiempo();
}

?>
