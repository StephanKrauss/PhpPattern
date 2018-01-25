<?php

	namespace App\Behavioral\Command;

	/**
	* Description
	*
	* @author
	* @copyright Stephan Krauss
	* @lisence MIT
	* @date 25.01.2018
	*/

	class BookStarsOffCommand extends BookCommand {
	    function execute() {
	        $this->bookCommandee->setStarsOff();
	    }
	}
