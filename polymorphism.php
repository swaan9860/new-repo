<?php
	interface Shape {
		public function calcArea();
	}
	class Circle implements Shape {
		private $radius;
		public function __construct($radius){
			$this -> radius = $radius;
		}
		public function calcArea(){
			return $this -> radius * $this -> radius * pi();
		}
	}
	class Rectangle implements Shape {
		private $height;
		private $width;
		public function __construct($width, $height){
			$this -> width = $width;
			$this -> height = $height;
		}
		public function calcArea()
		{
			return $this -> width * $this -> height;
		}
	}
	$mycirc = new Circle(7);
	$myrect = new Rectangle(3,4);
	echo $mycirc->calcArea();
	echo"</br>";
	echo $myrect->calcArea();
?>