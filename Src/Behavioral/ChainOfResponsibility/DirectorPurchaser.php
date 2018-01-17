<?php

	namespace App\Behavioral\ChainOfResponsibility;

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 21/06/2016
 * Time: 15:11
 */
class DirectorPurchaser implements Purchaser
{
    public function setNextPurchaser(Purchaser $nextPurchaser): bool
    {
        $this->nextPurchaser = $nextPurchaser;

        return true;
    }

    public function buy($price): bool
    {
        if ($price < 10000) {
            echo "Director: purchased";

            return true;
        }
        else {
            if (isset($this->nextPurchaser))
            {
                return $this->nextPurchaser->buy($price);
            }
            else {
                echo "Director: Could not buy";

                return false;
            }
        }
    }
}