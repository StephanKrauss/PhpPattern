<?php

namespace App\Observer;

/**
 * The Class we are observing
 *
 * This class generates a tick every second.
 */
class Ticker
{
    protected $numTicks = 0; // Stores the ticks
    protected $observers = array (); // Stores all observers

    /**
     * wird benötigt zur Registrierung der Beobachter
     *
     * Note the typehinting here.
     */
    public function attach($observer)
	{
        $this->observers[] = $observer;
    }

    /**
     * abschalten eines Beobachters
     *
     * Note the typehinting here.
     */
    public function detach($observer)
	{
        // Not implemented here
    }

    /**
     * alle Beobachter werden informiert, wenn sich etwas geändert hat
     */
    public function notify()
	{
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }

    /**
      * gibt die Anzahl der Ticks zurück
      */
    public function getNumTicks()
	{
        return $this->numTicks;
    }

    /**
     * der Ticker selbst
     */
    public function work()
	{
		try{
			while ($this->numTicks < 10) {

				// Sleep for one second
				sleep(1);
				$this->numTicks++;

				echo "<br> >>> Ticker: Added a Tick (" . $this->numTicks . ")<hr>";

				// Observer informieren
				$this->notify(); // Tell all observers we have changed
			}

			return $this;
		}
		catch(\Exception $e){
			throw $e;
		}
    }
}