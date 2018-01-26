<?php

	include_once ('../../../vendor/autoload.php');

	$gericht = new App\Structural\Decorator1\Rotwein( new App\Structural\Decorator1\Salat( new App\Structural\Decorator1\Kartoffeln(new App\Structural\Decorator1\Schnitzel() )));
	// $gericht = new App\Structural\Decorator1\Rotwein( new App\Structural\Decorator1\Kartoffeln(new App\Structural\Decorator1\Schweinebraten() ));

	echo 'Preis: '. $gericht->getPreis() . '<br>';
	echo 'Menü: ' . $gericht->getBezeichnung() . '<br>';