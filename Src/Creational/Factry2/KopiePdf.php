<?php

	namespace App\Factory;

	class KopiePdf implements InterfacePdf
	{
		protected $rechnungsnummer = null;

		public function __construct()
		{

		}

		public function setRechnungsnummer(int $rechnungsNummer)
		{
			$this->rechnungsnummer = $rechnungsNummer;

			return $this;
		}

		public function getDocument(){
			return 'Kopie: '.$this->rechnungsnummer;
		}
	}