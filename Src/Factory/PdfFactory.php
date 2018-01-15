<?php

	namespace App\Factory;

	class PdfFactory
	{
		protected $container = null;
		protected $typ = null;

		protected $document = null;

		public function __construct(\Pimple\Container $container) {
			$this->container = $container;
		}

		public function setTyp($typ)
		{
			$this->typ=$typ;

			return $this;
		}

		public function work(){
			try{
				if(is_null($this->container))
					throw new \Exception('Container empty');

				if(is_null($this->typ))
					throw new \Exception('Typ empty');

				$this->document = $this->container[$this->typ];

				return $this;
			}
			catch(\Exception $e){
				$test = 123;
			}
		}

		public function getDocument()
		{
			return $this->document;
		}
	}

