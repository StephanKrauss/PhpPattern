<?php

	include_once('../../../vendor/autoload.php');

	// the callCommand function demonstrates that a specified
	// function in BookCommandee can be executed with only
	// an instance of BookCommand.

	// Kommandant
	$book = new App\Behavioral\Command\BookCommandee('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');

	// anzeigen der Ausgangslage
	echo 'Buch nach dem drucken <br>';
	echo $book->getAuthorAndTitle();
	echo '<hr>';

	// Situation Buch markieren
	$starsOn = new App\Behavioral\Command\BookStarsOnCommand($book);
	$starsOn->execute();

	echo 'Buch nach dem kennzeichnen: <br>';
	echo $book->getAuthorAndTitle().'<hr>';

	// Situation Markierung am Buch entfernen
	$starsOff = new App\Behavioral\Command\BookStarsOffCommand($book);
	$starsOff->execute();

	echo 'Buch nach entfernen der Kennzeichnen: <br>';
	echo $book->getAuthorAndTitle().'<br>';