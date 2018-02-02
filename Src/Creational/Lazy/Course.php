<?php

	namespace App\Creational\Lazy;

/**
 * Class Course
 *
 * Als Nächstes erstellen wir eine Kursklasse.
 * Um lazy Instanziierung zu erhalten, erstellen wir eine
 * $studies-Eigenschaft und weisen ihr einen Nullwert zu.
 * Wir werden auch nichts im Konstruktor der Klasse tun.
 */

	class Course
	{
		public $courseId;
		private $students = null;

		public function Course($courseId)
		{
			$this->courseId = $courseId;
		}

		public function getStudents()
		{
			if($this->students == null){
				$this->students = $this->loadStudents();
			}

			return $this->students;
		}

		private function loadStudents()
		{
			return [
				new Student('1234', 'Jon', 'Doe'),
				new Student('4321', 'Jane', 'Doe')
			];
		}
	}