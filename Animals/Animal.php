<?php
namespace Animals;

abstract class Animal {
	protected $color;
	private $name;
	private $noise;

	public function describe() {
		return "$this->name is $this->color</br>";
	}

	protected function make_noise() {
		return "$this->name makes $this->noise noise</br>";
	}

	public function __construct( $name, $color, $noise ) {
		$this->name  = $name;
		$this->color = $color;
		$this->noise = $noise;
	}
}

