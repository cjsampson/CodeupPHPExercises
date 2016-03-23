<?php

class Square extends Rectangle {
	
	protected $data = [];

	public function __construct($side)
	{
		parent::__construct($side, $side);
	}

	public function __set($name, $value) 
	{
		$this->data[$name] = $value;
	}

	public function __get($name) 
	{
		return $this->data[$name];
	}
}