<?php

	namespace App\Behavioral\ChainOfResponsibility;

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 21/06/2016
 * Time: 14:11
 */
class ManagerPurchaser implements Purchaser
{
    public function setNextPurchaser(Purchaser $nextPurchaser): bool
    {
        $this->nextPurchaser = $nextPurchaser;

        return true;
    }

    public function buy($price): bool
    {
        if ($price < 500) {
            echo "Manager: purchased";

            return true;
        }
        else {
            if (isset($this->nextPurchaser))
            {

                return $this->nextPurchaser->buy($price);
            } else {
                echo "Manager: Could not buy";

                return false;
            }
        }
    }
}