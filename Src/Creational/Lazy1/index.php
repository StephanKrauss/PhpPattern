<?php

	class Burger
	{
		private $cheese;
		private $chips;
		private $price;

		public function __construct(bool $cheese, bool $chips)
		{
			$this->cheese=$cheese;
			$this->chips=$chips;

			$this->price=rand(1, 2.50) + ($cheese ? 0.5 : 0) + ($chips ? 1 : 0);
		}

		public function getPrice(): int
		{
			return $this->price;
		}
	}

	class BurgerLazyLoader
	{
		private static $instances = [];

		public static function getBurger(bool $cheese, bool $chips): Burger
		{
			if(!isset(self::$instances[$cheese . $chips])){
				self::$instances[$cheese . $chips] = new Burger($cheese, $chips);
			}

			return self::$instances[$cheese . $chips];
		}

		public static function getBurgerCount(): int
		{
			return count(self::$instances);
		}
	}

	$burger = BurgerLazyLoader::getBurger(true, true);
	echo 'Burger with cheese and fries costs: £'.$burger->getPrice();

	echo '<br>';
	echo 'Instances in lazy loader: '.BurgerLazyLoader::getBurgerCount();
	echo '<br>';

	$burger = BurgerLazyLoader::getBurger(true, false);
	echo 'Burger with cheese and no fries costs: £'.$burger->getPrice();

	echo '<br>';
	echo 'Instances in lazy loader: '.BurgerLazyLoader::getBurgerCount();
	echo '<br>';

	$burger = BurgerLazyLoader::getBurger(true, true);
	echo 'Burger with cheese and fries costs: £'.$burger->getPrice();
	echo '<br>';
	echo 'Instances in lazy loader: '.BurgerLazyLoader::getBurgerCount();