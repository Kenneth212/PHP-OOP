<?php
<--EXAMPLE 1: -->

	class Frog {
	public $animal;
	public $color;
	public $size;
	public $height;

		function__construct($title, $animal, $color, $size, $height){
		$this->animal = $animal;
		$this->color = $color;
		$this->size = $size;
		$this->height = $height;
		}
	}

	class movies {
	public $action;
	public $horror;
	public $comedy;
	public $adventure;

		function__construct($title, $action, $horror, $comedy, $adventure){
		$this->action = $action;
		$this->horror = $horror;
		$this->comedy = $comedy;
		$this->adventure = $adventure;
		}
	}

	class car {
		public $agility;
		public $brand;
		public $color;
		public $height;

		function__construct($title, $agility, $brand, $color, $height){
		$this->agility = $agility;
		$this->brand = $brand;
		$this->color = $color;
		$this->height = $height;
		}
	}
<--EXAMPLE 2: -->

	$frog1 = new Frog("amphibian","green","7", "2'5");
	print "Frog 1: {$frog1->getAnimal()}";

	$movies1 = new movies("Expendables","Insidious","Anchorman", "Zombie Land");
	print "Movies 1: {$movies1->getAction()}";

	$car1 = new Car("180 km/h","BMW","blue","5'9");
	print "Car 1: {$car1->getAgility()}";


?>