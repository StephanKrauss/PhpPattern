<?php

	include_once('../../../vendor/autoload.php');

	$oMyFriendMax_Facade = new App\Structural\Facade\MyFriendMax_Facade();

	// Auto
	$drive = $oMyFriendMax_Facade->visitByCar();
	echo $drive . '<hr>';

	// Bus
	$drive = $oMyFriendMax_Facade->visitByBus();
	echo $drive;