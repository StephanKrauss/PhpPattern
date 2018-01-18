<?php

	include_once ('../../../vendor/autoload.php');

/**
* Description
*
* @author Stephan Krauss
* @copyright Stephan Krauss
* @lisence MIT
* @date
*/

// Rollen in einer Firma

// Mitarbeiter, < 100
$associate = new App\Behavioral\ChainOfResponsibility\AssociatePurchaser();

// Abteilungsleiter, < 500
$manager = new App\Behavioral\ChainOfResponsibility\ManagerPurchaser();

// Direktor, < 10000
$director = new App\Behavioral\ChainOfResponsibility\DirectorPurchaser();

// Aufsichtsratsvorsitzender, < 100000
$board = new App\Behavioral\ChainOfResponsibility\BoardPurchaser();

// Aufbau der Kette
$associate->setNextPurchaser($manager);
$manager->setNextPurchaser($director);
$director->setNextPurchaser($board);

// Kauf eines Artikel
$associate->buy(1000);