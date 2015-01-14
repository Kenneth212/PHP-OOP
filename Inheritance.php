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
			return "My favorite cookie is snickerdoodle" . $this->snickerdoodle;
			}
	}
	class Snickerdoodle extends Cookie {
			function sugar() {
				return $this->rasian;
			}
	}

$snickerdoodle = new Cookie("snickerdoodle","sugar","peanutbutter","chocolatechip","rasian","gingerbread","oatmeal");
print" Cookie 1 " .$snickerdoodle->getName(); 
	


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
			return "My favorite kind of bread is" . $this->wheat;
			}
	}
	class Wheat extends Bread {
			function flat() {
				return $this->white;
			}
	}

$wheat = new Bread( "wheat","italian","flat","white");
print" Wheat 1 " . $wheat->getName(); 

	
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

		function getName(){
			return "My favorite sport is" . $this->soccer;
			}
	}
	class Soccer extends Sports {
			function tennis() {
				return $this->football;
			}
	}

$soccer = new Sports( "soccer","volleyball","tennis","football");
print"Soccer 1 " . $soccer->getName();
	
?>