<?php

	include_once ('../../vendor/autoload.php');

	include_once ('container.php');

	$documentTypes = array(
		'anschreiben',
		'rechnung'
	);

	$rechnungsNummer = 123456;

	/**********************************************************/

	$pdfFactory = new \App\Factory\PdfFactory($container);

	foreach($documentTypes as $documentTyp){
		$document = $pdfFactory->setTyp($documentTyp)->work()->getDocument();

		$text = $document->setRechnungsnummer($rechnungsNummer)->getDocument();

		echo $text.'<hr>';
	}

	$test = 123;