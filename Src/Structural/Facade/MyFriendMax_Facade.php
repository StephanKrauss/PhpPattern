<?php
	namespace App\Structural\Facade;

	final class MyFriendMax_Facade
	{
	    public function visitByCar()
	    {
	        $oMyCar = new MyCar();

	        $drive = $oMyCar->fillUpWithPetrol(40)
	            ->setStreet('An der alten Schäferei')
	            ->setHouseNumber(35)
	            ->setZipCode('08134')
	            ->setTown('Langenweisbach')
	            ->drive();

	        return $drive;
	    }

	    public function visitByBus()
	    {
	        $oPublicBus = new PublicBus();

	        $drive = $oPublicBus->buyTicket(12.50)
	            ->setStreet('An der alten Schäferei')
				->setHouseNumber(35)
				->setZipCode('08134')
				->setTown('Langenweisbach')
				->drive();

	        return $drive;
	    }
	}