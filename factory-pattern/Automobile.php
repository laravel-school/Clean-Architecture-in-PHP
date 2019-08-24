<?php 

class Automobile
{
	private $vehicleMake;
	private $vehicleModel;

	function __construct($make, $model)
	{
		$this->vehicleMake = $make;
		$this->vehicleModel = $model;
	}

	public function getMakeAnModel()
	{
		return $this->vehicleMake . ' ' . $this->vehicleModel;
	}
}