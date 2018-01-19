<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 21/06/2016
 * Time: 16:01
 */

namespace App\Behavioral\Strategy;

interface Power
{
    public function raise(int $number): int;
}