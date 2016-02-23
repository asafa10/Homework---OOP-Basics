<?php

require_once 'autoload.php';

class Car 
{
	private $model;
	
	private $maxSpeed;
	
	private $currentSpeed;
	
	private $color;
	
	private $currentGear;
	
	private $isSportCar = false;
	
	private $owner;
	
	private $price;
	
	
	public function __construct($model, $maxSpeed, $isSportCar, $color, $price, Person $owner = null) {
		$this->model = $model;
		$this->maxSpeed = $maxSpeed;
		$this->isSportCar = $isSportCar;
		if($this->isSportCar == true){
			$this->maxSpeed = $maxSpeed;
		}else{
			if($maxSpeed < 200){
				$this->maxSpeed = $maxSpeed;
			}else{
				$this->maxSpeed = 200;
			}
		}
		$this->color = $color;
		$this->price = $price;
		$this->owner = $owner;	
	}
	
	public function getModel(){
		return $this->model;
	}
	
	public function setModel($model) {
		$this->model = $model;
	}
	
	public function getMaxSpeed(){
		return $this->maxSpeed;
	}
	
	public function setMaxSpeed($maxSpeed) {
		$this->maxSpeed = $maxSpeed;
	}
	
	public function getCurrentSpeed(){
		return $this->currentSpeed;
	}
	
	public function setCurrentSpeed($currentSpeed) {
		$this->currentSpeed = $currentSpeed;
	}
	
	public function getColor(){
		return $this->color;
	}
	
	public function setColor($color) {
		$this->color = $color;
	}
	
	public function getCurrentGear(){
		return $this->currentGear;
	}
	
	public function setCurrentGear($currentGear) {
		$this->currentGear = $currentGear;
	}
		
	public function accelerate() {
		$this->currentSpeed += 20;
	}
	
	public function changeGearUp() {
		if (($this->currentGear) < 5)
			$this->currentGear += 1;
	}
	
	public function changeGearDown() {
		if (($this->currentGear) > 1)
			$this->currentGear -= 1;
	}
	
	public function changeColor($color2) {
		$this->color = $color2;
	}
	
	public function getSportCar() {
		return $this->isSportCar;
	}
	
	public function setSportCar($isSportCar) {
		if ($this->isSportCar) {
			return ' sport car ';
		}
		else
			return ' not sport car ';
	}
	
	public function setOwner(Person $owner)
	{
		$this->owner = $owner;
	}
	
	public function getOwner()
	{
		return $this->owner;
	}
	
	public function changeOwner(Person $owner){
		$this->owner = $owner;
	
	}	
	
	public function setPrice($price)
	{
		$this->price = $price;
	}
	
	public function getPrice()
	{
		return $this->price;
	}
	
	public function isMoreExpensive(Car $otherCar)
	{
		if($this->price > $otherCar->price){
			return ' First car is more expensive ';
		}else if($this->price < $otherCar->price){
			return ' Second car is more expensive ';
		}else{
			return ' Equal prices';
		}
	}
	
	public function calculatePriceForScrap($metalPrice)
	{
		$coeff = 0.2;
		if($this->isSportCar == true){
			$coeff += 0.05;
		}else if($this->color == 'black' || $this->color == 'white'){
			$coeff += 0.05;
		}
		$finalPrice = $metalPrice*$coeff;
		return $finalPrice;
	}
	
	
	public function showCar() {
		return sprintf(
				'Model: %s, Speed Max: %d km/h, Color: %s, Price: %d, Sport car: %s',
				$this->getModel(),
				$this->getMaxSpeed(),
				$this->getColor(),
				$this->getPrice(),
				$this->getSportCar()
	
		);
	}
	

}