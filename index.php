<?php 
<-- EXAMPLE 1: --->
	class Frog {
		//body
		//body
		//body
	}
	class movies {
		//body
		//body
		//body
	}
	class car {
		//body
		//body
		//body
	}

<!-- EXAMPLE 2: -->
	$frog1 = newfrog();
	$frog2 = newfrog();

	$movies1 = newmovies();
	$movies2 = newmovies();

	$car1 = newcar();
	$car2 = newcar(); 


<!-- EXAMPLE 3: -->
	class frog {
		public $animal = amphibian;
		public $color = green;
		public $size = "7";
		public $height = "2'5";
	}


	class movies {
		public $action = Expendables;
		public $horror = Insidous;
		public $comedy = The Anchor Man;
		public $adventure = Zombie Land;
	}

	class car {
		public $agility = 180 km/h;
		public $brand = BMW;
		public $color = blue;
		public $height = "5'9";
	}

<!-- EXAMPLE 4: -->

	$frog1 = new frog();
	print $frog1>ribbet;
	// default name
	

	$movies1 = new movies();
	print $movies1>Insidous;
	// default name

	$car1 = new car();
	print $car1>volvo;
	// default name

<!-- EXAMPLE 5: -->

	public function myMethod( $argument, $another) {
	// stuff
	}

	public function myMethod( $argument, $another) {
	// stuff
	}

	public function myMethod( $argument, $another) {
	// stuff
	}

<!-- EXAMPLE 6: -->
	
	class frog {
		public $animal = amphibian;
		public $color = green;
		public $size = "7";
		public $height = "2'5";
		function getAnimal() {
		return “{$this>animal}” .
		“{$this>color}”;
		}
	}










 ?>
