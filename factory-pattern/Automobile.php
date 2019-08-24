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

	public function getMakeAndModel()
	{
		return $this->vehicleMake . ' ' . $this->vehicleModel;
	}
}


class AutomobileFactory
{
	public static function create($make, $model)
	{
		return new Automobile($make, $model);
	}
}

// Having the factory to create the automobile. 
$volkswagen = AutomobileFactory::create("volkswagen", "GIT2");

print_r($volkswagen->getMakeAndModel());
