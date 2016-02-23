<?php

class CarShop
{

	private $automobilesArray;
	protected $counter = 0;

	public function __construct()
	{
		$this->carArray = [];
	}


	public function addCar(Car $car){
		$this->carArray[] = $car;
	}

	public function getCarArray()
	{
		return $this->carArray;
	}

	public function getNextCar()
	{
		$count = count($this->carArray);
		if($this->counter < $count){
			echo $this->carArray[$this->counter]->getInfo();
			echo PHP_EOL;
			$this->counter++;
			return $this->counter;
		}
	}

	public function removeCar(Car $car)
	{
		$array = $this->getCarArray();
		foreach ($array as $key=>$value){
			if($array[$key] == $car){
				unset ($array[$key]);
			}
		}
	}

	public function sellNextCar(Person $buyer)
	{
		$nextCar = $this->getNextCar();
		$buyer->buyCar($nextCar);
		$this->removeCar($nextCar);

	}

	public function showAllCarsInTheShop(){
		$array = $this->carArray;
		foreach ($array as $key => $value) {
			echo $value->getInfo(), PHP_EOL;
		}

	}
}


