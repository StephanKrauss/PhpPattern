<?php

	/**
	* Structural / Bridge Pattern
	*
	* Entkoppeln eine Abstraktion von ihrer Implementierung,
	* so dass beide unabhängig voneinander variieren können.
	*
	* @author Stephan Krauss
	* @copyright Stephan Krauss
	* @lisence MIT
	* @date 05.02.2018
	*/

	include_once ('../../../vendor/autoload.php');

	$htmlFormatter = new App\Structural\Bridge\HtmlFormatter();

	$helloWorldHtml = new App\Structural\Bridge\HelloWorldService($htmlFormatter);
	$print = $helloWorldHtml->get();
	echo 'Html: ' . $print . '<hr>';

	$helloWorldPrint = new App\Structural\Bridge\PlainTextFormatter();

	$helloWorldPrint = new App\Structural\Bridge\HelloWorldService($helloWorldPrint);
	$print = $helloWorldPrint->get();
	echo 'Print: ' . $print;
