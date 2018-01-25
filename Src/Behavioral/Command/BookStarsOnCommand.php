<?php

	namespace App\Behavioral\Command;

	/**
	 * Beschreibung
	 *
	 * @author User
	 * @since 25.01.2018 18:39
	 */

	class BookStarsOnCommand extends BookCommand
	{
	    function execute() {
	        $this->bookCommandee->setStarsOn();
	    }
	}
