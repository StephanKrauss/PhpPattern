<?php

	namespace App\Structural\Decorator1;

	/**
	 * Beschreibung der Klasse
	 *
	 * @author User
	 * @date 24.01.2018
	 * @file Rotwein.php
	 * @link Aufruf der Datei
	 */
	class Rotwein implements Beilage
	{
		protected $beilage = null;

		public function __construct($beilage)
		{
			$this->beilage = $beilage;
		}

		public function getPreis(){
			return 4.75 + $this->beilage->getPreis();
		}

		public function getBezeichnung()
		{
			return ' Rotwein,' . $this->beilage->getBezeichnung();
		}
	}
