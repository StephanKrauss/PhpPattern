<?php
/**
* DirectoryIterator , einfache Anwendung
*
* @author Stephan Krauss
* @copyright Stephan Krauss
* @lisence MIT
* @date
* @link
*/

	// create new DirectoryIterator object
	$dir = new DirectoryIterator("../Iterator");

	// loop through the directory listing
	foreach ($dir as $item) {
	    echo $item . "<br>";
	}


