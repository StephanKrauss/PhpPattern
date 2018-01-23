<?php
/**
* Verwendung des ArrayIterator in einer Klasse
*
* @author Stephan Krauss
* @copyright Stephan Krauss
* @lisence MIT
* @date
* @link
*/

	class Library implements IteratorAggregate
	{
	    protected $books = [
	        "Professional PHP Programming",
	        "Programming Perl",
	        "A Byte of Python",
	        "The Ruby Way"
	    ];

	    // return an Iterator of your data
	    public function getIterator()
		{
	        return new ArrayIterator($this->books);
	    }
	}

	echo "<h3>implements IteratorAggregate</h3>";

	$library = new Library();

	foreach($library as $key => $value) {
	    echo $key . ": " . $value . "<br>";
	}