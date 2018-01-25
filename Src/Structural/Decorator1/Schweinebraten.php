<?php

	namespace App\Structural\Decorator1;

	/**
	 * Beschreibung der Klasse
	 *
	 * @author User
	 * @date 24.01.2018
	 * @file Schweinebraten.php
	 * @link Aufruf der Datei
	 */
	class Schweinebraten implements Beilage
	{
		public function getPreis(){
			return 7.90;
		}

		public function getBezeichnung()
		{
			return 'Schweinebraten';
		}
	}
