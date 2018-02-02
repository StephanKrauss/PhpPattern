<?php

	namespace App\Creational\Lazy;

	/**
	 * Class Student
	 *
	 * Um dieses Beispiel zu erstellen,
	 * benötigen wir zuerst eine Studentenklasse.
	 *
	 * @package App\Creational\Lazy
	 */

	class Student
	{
	  public $studentId;
	  public $forename;
	  public $surname;

	  public function __construct($studentId, $forename, $surname)
	  {
	    $this->studentId = $studentId;
	    $this->forename = $forename;
	    $this->surname = $surname;
	  }

	}
