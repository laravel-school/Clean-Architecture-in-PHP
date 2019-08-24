<?php 

include("Automobile.php");

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