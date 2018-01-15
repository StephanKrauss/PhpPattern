<?php

	include('CarInterface.php');

	class Car implements CarInterface
	{

	    private $color = null;

	    public function __construct() {
	        $this->color = "white";
	    }

	    public function setColor($color) {
	        $this->color = $color;
	    }

	    public function getColor() {
	        return $this->color;
	    }
	}