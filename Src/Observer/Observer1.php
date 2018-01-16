<?php

namespace App\Observer;

/**
 * Observer that counts the ticks
 */

class Observer1
{
    public function update($subject) {
        echo "Observer 1: Wow, a Tick!!! We are at tick number " . $subject->getNumTicks() . "<br>";
    }
}