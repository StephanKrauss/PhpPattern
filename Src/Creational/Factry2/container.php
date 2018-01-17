<?php
	$container = new \Pimple\Container();

	$container['anschreiben'] = function($c){
		return new \App\Factory\AnschreibenPdf();
	};

	$container['rechnung'] = function($c){
		return new \App\Factory\RechnungPdf();
	};

	$container['kopie'] = function($c){
		return new \App\Factory\KopiePdf();
	};

	$container['packzettel'] = function($c){
		return new \App\Factory\PackzettelPdf();
	};