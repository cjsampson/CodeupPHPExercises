<?php

class Rectangle {
	public $width;
	public $height;

	public function __construct($width, $length)
	{
		$this->width = $width;
		$this->length = $length;
	}

	public function area() 
	{
		return $this->width * $this->length;
	}

	public function perimeter() 
	{
		return ($this->width * 2) + ($this->length * 2);
	}
}