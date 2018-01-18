<?php

include_once ('../../../vendor/autoload.php');

/*
 * Veränderung eines Objektes zur Laufzeit
 */

// Vorgabe einer Nummer
$number = 10;

// Auswahl der Erweiterung
if ($number < 5) {
    $power = new App\Behavioral\Strategy\Cube();
}
else {
    $power = new App\Behavioral\Strategy\Square();
}

// Veränderung der Nummer
$processor = new App\Behavioral\Strategy\RaiseNumber($power);
$newNumber = $processor->setNumber($number)->work()->getNumber();

echo $newNumber;

