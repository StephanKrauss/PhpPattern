<?php
    /**
     * ArrayIterator
     *
     * @subpackage Task ???
     * @author stephan.krauss
     * @date 22.01.2018
     * @time 16:11
     * @link https://www.sitepoint.com/using-spl-iterators-1/
     */

    // an array (using PHP 5.4's new shorthand notation)
    $arr = [
        "sitepoint",
        "phpmaster",
        "buildmobile",
        "rubysource",
        "designfestival",
        "cloudspring"
    ];

    $test = 123;

    // create a new ArrayIterator and pass in the array
    $iter = new ArrayIterator($arr);

    $count = $iter->count();
    $valid = $iter->valid();



    // loop through the object
    foreach ($iter as $key => $value) {
        echo $key . ":  " . $value . "<br>";

    }

    $valid = $iter->valid();
    echo "Zustand: ".$valid.'<hr>';

    $iter->rewind();
    $valid = $iter->valid();
    echo "Zustand: ".$valid.'<hr>';