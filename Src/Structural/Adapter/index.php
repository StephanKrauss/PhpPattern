<?php

/**
 * Beispiel von sourcemaking
 *
 * @link https://sourcemaking.com/design_patterns/adapter/php
 */

include_once('../../../vendor/autoload.php');

use App\Structural\Adapter\BookAdapter;
use App\Structural\Adapter\SimpleBook;

echo "## <br />";

$book = new SimpleBook("Gamma, Helm, Johnson, and Vlissides", "Design Patterns");
$bookAdapter = new BookAdapter($book);

echo "Autor und Titel: ".$bookAdapter->getAuthorAndTitle()."<br />";
echo "## <br />";