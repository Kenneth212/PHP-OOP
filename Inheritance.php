<?php 
	class Cookie {
		public $gingerbread;
		public $chocolatechip;
		public $sugar;
		public $snickerdoodle;
		public $rasian;
		public $oatmeal;
		public $peanutbutter;

		function __construct($gingerbread, $chocolatechip, $sugar, $snickerdoodle, $rasian, $oatmeal, $peanutbutter) {
			$this->$gingerbread = $gingerbread;
			$this->$chocolatechip = $chocolatechip;
			$this->$sugar = $sugar;
			$this->$snickerdoodle = $snickerdoodle;
			$this->$rasian = $rasian;
			$this->$oatmeal = $oatmeal;
			$this->$peanutbutter =$peanutbutter;
		}

		function getName(){
			return "My favorite cookie is " . $this->snickerdoodle;
			}
	}
	class Snickerdoodle extends Cookie {
			function __construct($gingerbread, $chocolatechip, $sugar, $snickerdoodle, $rasian, $oatmeal, $peanutbutter){				
				parent::__construct($gingerbread, $chocolatechip, $sugar, $snickeroodle, $rasian, $oatmeal, $peanutbutter);
			$this->rasian = $rasian;
			}
			function sugar() {
				return $this->rasian;
			}
	}

	class Peanutbutter extends Cookie {
			function __construct($gingerbread, $chocolatechip, $sugar, $snickerdoodle, $rasian, $oatmeal, $peanutbutter){
				parent::__construct($gingerbread, $chocolatechip, $sugar, $snickerdoodle, $rasian, $oatmeal, $peanutbutter);
			$this->rasian = $rasian;
			}
			function sugar() {
				return $this->rasian;
			}
	}
$snickerdoodle = new Cookie("snickerdoodle","sugar","peanutbutter","chocolatechip","rasian","gingerbread","oatmeal");
print"  " .$snickerdoodle->getName(); 
	


	class Bread {
		public $wheat;
		public $italian;
		public $flat;
		public $white;

		function __construct($wheat, $italian, $flat, $white) {
			$this->$wheat = $wheat;
			$this->$italian = $italian;
			$this->$flat = $flat;
			$this->$white = $white;
		}

		function getName(){
			return "My favorite kind of bread is " . $this->wheat;
			}
	}
	class Wheat extends Bread {
			function __construct($wheat, $italian, $flat, $white) {
				parent::__construct($wheat, $italian, $flat, $white);
			$this->white = $white;
			}
			function flat() {
				return $this->white;
			}
	}
	class Italian extends Bread {
		function __construct($wheat, $italian, $flat, $white) {
			parent::__construct($wheat, $italian, $flat, $white);
		$this->white = $white;
		}
		function flat() {
			return $this->white;
		}
	}

$wheat = new Bread( "wheat","italian","flat","white");
print" " . $wheat->getName(); 

	
	class Sports {
		public $soccer;
		public $volleyball;
		public $tennis;
		public $football;

		function __construct($soccer, $volleyball, $tennis, $football) {
			$this->$soccer = $soccer;
			$this->$volleyball = $volleyball;
			$this->$tennis = $tennis;
			$this->$football = $football;
		}

		function getName() {
			return "My favorite sport is " . $this->soccer;
		}	
	}
	class Soccer extends Sports {
			function __construct($soccer,$volleyball,$tennis,$football) {
				parent:: __construct($soccer,$volleyball,$tennis,$football);
			$this->tennis = $tennis;
			}
			function tennis() {
				return $this->football;
			}
	}
	class Volleyball extends Sports {
		function __construct($soccer,$volleyball,$tennis,$football) {
			parent:: __construct($soccer,$volleyball,$tennis,$football);
		$this->volleyball = $volleyball;
		}
		function tennis() {
			return $this->football;
		}
	}
$soccer = new Sports( "soccer","volleyball","tennis","football");
print"  " . $soccer->getName();
?>