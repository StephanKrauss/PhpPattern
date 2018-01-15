<?php

	namespace App\Factory;

	interface InterfacePdf
	{
		public function setRechnungsnummer(int $rechnungsNummer);

		public function getDocument();
	}