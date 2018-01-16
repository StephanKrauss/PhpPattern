<?php

namespace App\Observer;

/**
 * Observer that calculates the number of ticks until 10
 */

class Observer2
{
    public function update($subject) {
        echo "Observer 2: TickTick, there are " . (10 - $subject->getNumTicks()) . " ticks left until 10 <br>";
    }
}