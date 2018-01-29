<?php

	namespace App\Structural\Facade;

	class PublicBus
	{
		protected $price=0;
		protected $zipCode = false;
		protected $street = null;
		protected $housenumber = null;
		protected $town = null;

		public function buyTicket($price)
		{
			$this->price=$price;

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
			$this->zipCode = $zipCode;

			return $this;
		}

		public function drive()
		{
			return 'bus';
		}
	}