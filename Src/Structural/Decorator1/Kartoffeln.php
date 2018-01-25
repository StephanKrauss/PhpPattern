<?php

	namespace App\Structural\Decorator1;

	/**
	 * Beschreibung der Klasse
	 *
	 * @author User
	 * @date 24.01.2018
	 * @file Kartoffeln.php
	 * @link Aufruf der Datei
	 */
	class Kartoffeln implements Beilage
	{
		protected $beilage = null;

		public function __construct($beilage)
		{
			$this->beilage = $beilage;
		}

		public function getPreis(){
			return 2.5 + $this->beilage->getPreis();
		}

		public function getBezeichnung()
		{
			return ' Kartoffeln,' . $this->beilage->getBezeichnung();
		}
	}
