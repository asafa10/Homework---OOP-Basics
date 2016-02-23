<?php

class Person 
{
	private $name;		
	
	private $personalNumber;
	
	private $isMale = false;
	
	private $money;
	
	private $car;
	
	public function __construct($name, $personalNumber, $isMale, $money, Car $car = null)
	{
		$this->name = $name;
		$this->personalNumber = $personalNumber;
		$this->isMale = $isMale;
		$this->money = $money;
		$this->car = $car;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}
	
	
	public function getPersonalNumber()
	{
		return $this->personalNumber;
	}
	
	public function setPersonalNumber($personalNumber)
	{
		$this->personalNumber = $personalNumber;
	}
	
	public function getGender()
	{
		if($this->isMale){
			return 'male';
		}else{
			return 'female';
		}
	}
	
	public function setGender($isMale)
	{
		$this->isMale = $isMale;
	}
	

	public function getMoney()
	{
		return $this->money;
	}
	
	public function setMoney($money)
	{
		$this->money = $money;
	}
	
	public function getCar()
	{
		return $this->car;
	}
	
	public function setCar(Car $car)
	{
		$this->car = $car;
	}
	
	public function buyCar(Car $car)
	{
		if($this->money >= $car->getPrice()){
			$this->money -= $car->getPrice();
			echo 'Successful deal!' , PHP_EOL;
			$this->car = $car;
			$car->changeOwner($this);
			return $this->money;
		}else{
			echo ' Money needed .. ';
		}
	}
	
	public function sellCarForScrap($metalPrice)
	{
		$this->money += $this->car->calculatePriceForScrap($metalPrice);
		$this->car = null;
		return $this->money;
	
	}
		
	public function getInfo()
	{
		return sprintf(
			'Name: %s ,Personal No: %d, Gender: %s, Money: %d', 
			$this->getName(), 
			$this->getPersonalNumber(),
			$this->getGender(),
			$this->getMoney()
			
		);
	}
}