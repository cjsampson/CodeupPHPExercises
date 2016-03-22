<?php


class Square extends Rectangle {

	public $length;
	public $width;

	public function __construct($length)
	{
		$this->length = $length;
		$this->width = $length;
	}

	public function perimeter() 
	{
		return ($this->width * 2) + ($this->length * 2);
	}

	public function area() 
	{
		return $this->width * $this->width;
	}

}