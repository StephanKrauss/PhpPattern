<?php
    /**
     * recursive Array Iterator
     *
     * @subpackage Task ???
     * @author stephan.krauss
     * @date 22.01.2018
     * @time 16:28
     * @link https://www.sitepoint.com/using-spl-iterators-1/
     */

    // a multidimensional array
    $arr = [
        ["sitepoint", "phpmaster"],
        ["buildmobile", "rubysource"],
        ["designfestival", "cloudspring"],
        "not an array"
    ];

    // loop through the object
    foreach ($arr as $key => $value) {
        // check for arrays
        if (is_array($value)) {
            foreach ($value as $k => $v) {
                echo $k . ": " . $v . "<hr>";
            }
        }
        else {
            echo $key . ": " . $value . "<br>";
        }
    }

    echo '<h3> >>> RecursiveArrayIterator <<< </h3>';

    $iter = new RecursiveArrayIterator($arr);


    // loop through the object
    // we need to create a RecursiveIteratorIterator instance
    foreach(new RecursiveIteratorIterator($iter) as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
