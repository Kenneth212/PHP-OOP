<?php

Class school {
	public $grades;
	public $homework;
	public $quiz;

	function __construct( $grades, $homework, $quiz )
{	
	$this->grades1 = $grades;
	$this->homework2 = $homework;
	$this->quiz3 = $quiz;
}

	function learn()
	{
		return " High school students dont like to learn, their grades are bad " . $this->grades;
	}

	function read()
	{
		return " Some high school students also dont like read, they like to fail " . $this->$quiz;
	}
}

$Student = new school ("fail", "penicl", "detention");
echo $Student->learn();
?>