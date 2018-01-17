<?php
	include_once ('../../vendor/autoload.php');

	$demo1 = App\Singleton\Singleton::getInstance();

	$demo1->value = 5;
	echo '$demo1: $value = ' . $demo1->value . '<br />';

	$demo2 = App\Singleton\Singleton::getInstance();
	echo '$demo2: $value = ' . $demo2->value;