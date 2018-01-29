<?php

	namespace App\Structural\Facade;

	class MyCar
	{
		protected $petrol=false;
		protected $street=false;
		protected $housenumber=false;
		protected $town=false;
		protected $zipCode=null;

		public function fillUpWithPetrol($petrol)
		{
			$this->petrol=$petrol;

			return $this;
		}

		public function setStreet($street)
		{
			$this->street=$street;

			return $this;
		}

		public function setHouseNumber($housenumber)
		{
			$this->housenumber=$housenumber;

			return $this;
		}

		public function setTown($town)
		{
			$this->town=$town;

			return $this;
		}

		public function setZipCode($zipCode)
		{
			$this->zipCode=$zipCode;

			return $this;
		}

		public function drive()
		{
			return 'car';
		}
	}