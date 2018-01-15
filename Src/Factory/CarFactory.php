<?php

	include ('Car.php');

	class CarFactory {

	    private function __construct() {

	    }

	    public static function getBlueCar()
		{
	        return self::getCar("blue");
	    }

	    public static function getRedCar() {
	        return self::getCar("red");
	    }

	    private static function getCar($color)
		{
	        $car = new Car();
	        $car->setColor($color);

	        return $car;
	    }
	}

	$car1 = CarFactory::getBlueCar();
	echo "Car 1 is ".$car1->getColor() ."<br>";

	$car2 = CarFactory::getRedCar();
	echo "Car 2 is ".$car2->getColor() ."<br>";

