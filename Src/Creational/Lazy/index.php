<?php

	include_once ('../../../vendor/autoload.php');

/**
* Group: 'Creational' , Lazy initialization
*
* Motivation:
* Lazy Instantiation (auch bekannt als Lazy Load) ist ein objektorientiertes Entwurfsmuster,
* das versucht, die Menge an Ressourcen zu reduzieren,
* die zum Laden einer Anwendung benötigt wird,
* indem nur bestimmte Teile davon geladen werden,
* wenn sie benötigt werden. Dies ist sinnvoll, da Sie nicht bei jeder
* Seitenladung alle Teile einer Anwendung benötigen.
* Durch das Reduzieren der geladenen Daten werden also die zum Laden der Seite
* erforderlichen Ressourcen und Verarbeitungszeiten reduziert.
*
* Abstarktion:
* Ein gutes Beispiel hierfür könnte die Erstellung einer Anwendung für Studenten
* und Kurse oder ähnliches sein. Offensichtlich möchten Sie die Studenten
* mit ihren Kursen verknüpfen, aber Sie möchten nicht alle Studenten,
* die für einen Kurs angemeldet sind, laden müssen,
* wenn Sie sich eine Liste von Kursen ansehen.
* Lazy Instanziierung ermöglicht es Ihnen, nur die
* Schülerinformationen zu laden, wenn es aufgerufen wird.
*
* @author Stephan Krauss
* @copyright Stephan Krauss
* @lisence MIT
* @date
* @link
*/

	$course = new App\Creational\Lazy\Course('111');
	// print_r($course);

/**
 * Wir würden dies jedes Mal tun,
 * wenn wir Informationen über den Kurs wünschen,
 * aber dieser Kurs ist im Moment ein wenig nutzlos,
 * da nichts vorhanden ist, was es uns ermöglicht,
 * die Studenteninformationen zu bekommen.
 */

	$students = $course->getStudents();
	print_r($course);