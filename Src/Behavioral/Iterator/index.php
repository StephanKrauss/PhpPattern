<?php

include_once('../../../vendor/autoload.php');

$it = new App\Behavioral\Iterator\MyIterator();

foreach ($it as $key => $value) {
    var_dump($key, $value);

    echo "<hr>";
}