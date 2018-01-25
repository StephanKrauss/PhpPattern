<?php

	namespace App\Behavioral\Command;

	/**
	* Description
	*
	* @author
	* @copyright Stephan Krauss
	* @lisence MIT
	* @date
	*/

	abstract class BookCommand
	{
	    protected $bookCommandee;

	    function __construct($bookCommandee_in)
		{
	        $this->bookCommandee = $bookCommandee_in;
	    }

	    abstract function execute();
	}
