<?php

	namespace App\Structural\Decorator1;

	/**
	 * Beschreibung der Klasse
	 *
	 * @author User
	 * @date 24.01.2018
	 * @file Schnitzel.php
	 * @link Aufruf der Datei
	 */
	class Schnitzel implements Beilage
	{
		public function getPreis(){
			return 8.25;
		}

		public function getBezeichnung()
		{
			return 'Schnitzel';
		}
	}
