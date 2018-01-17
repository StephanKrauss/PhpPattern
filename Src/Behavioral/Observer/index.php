<?php

	include_once ('../../../vendor/autoload.php');

/**
 * Observer pattern without SplObjectStorage
 *
 * Little example because there are not much of them on the net.
 * It implements a Model-View relationship.
 * Taken from <a href="https://blog.oncode.info">Technik, Gothic und Anderes</a>.
 * Needs at least PHP 5.1
 *
 * @see http://www.php.net/~helly/php/ext/spl/interfaceSplObserver.html
 * @see http://phpavancado.net/comment/reply/410
 * @see http://wiki.cc/php/?title=SplObserver
 * @author Skaldrom Y. Sarg
 */

// Die Klasse die überwacht wird (Subjekt)
$ticker = new  App\Observer\Ticker();

// der erste Beobachter vom Typ 1 (Observer 1_1)
$observer1_1 = new App\Observer\Observer1();
$ticker->attach($observer1_1);

// der zweite Beobachter des Typ 1 (Observer 1_2)
$observer1_2 = new App\Observer\Observer1();
$ticker->attach($observer1_2);

// ein Beobachter vom Typ 2 (Observer 2)
$observer2 = new App\Observer\Observer2();
$ticker->attach($observer2);

// Start des Tickers
$ticker->work();