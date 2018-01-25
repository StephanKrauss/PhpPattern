<?php

	include_once ('../../../vendor/autoload.php');

/**
* Decorator Pattern
*
* @author Stephan Krauss
* @copyright Stephan Krauss
* @lisence MIT
* @date
*/

	$PHPBook = new App\Structural\Decorator\EBook("Mastering PHP Design Patterns", "Junade Ali", "Some contents.");

	$PHPBook = new App\Structural\Decorator\PrintBook("Mastering PHP Design Patterns", "Junade Ali", "Some contents.");

	echo $PHPBook->getText();
