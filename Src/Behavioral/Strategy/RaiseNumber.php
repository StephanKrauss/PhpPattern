<?php

    namespace App\Behavioral\Strategy;

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 21/06/2016
 * Time: 16:29
 */
class RaiseNumber
{
    protected $strategy = null;
    protected $number = null;

    public function __construct(Power $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param null $number
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    public function work()
    {
        $this->number = $this->strategy->raise($this->number);

        return $this;
    }

    public function getNumber()
    {
        return $this->number;
    }
}