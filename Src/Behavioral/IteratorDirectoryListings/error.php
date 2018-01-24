<?php
/**
* DirectoryIterator mit Exception
*
* @author Stephan Krauss
* @copyright Stephan Krauss
* @lisence MIT
* @date
* @link
*/

	try {
	    $dir = new DirectoryIterator("../IteratorXXX");
	    foreach ($dir as $item) {
	        echo $item . "<br>";
	    }
	}
	catch (Exception $e) {
	    echo 'Klasse: ' . get_class($e) . ": " . $e->getMessage() . '<br>';
	    echo 'Line: ' . $e->getLine();
	}