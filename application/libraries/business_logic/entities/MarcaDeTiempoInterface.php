<?php

namespace business_logic\entities;

interface MarcaDeTiempoInterface
{

	function __construct();

	public function setId($id);

    public function getId();

	public function getTimestamp();

}
?>