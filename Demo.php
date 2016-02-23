<?php

require_once 'autoload.php';


$person = new Person('Kiril Kirov', 1234, true, 457896);
$person2 = new Person('Hasan Ahmed', 56789, true, 19875);
$car = new Car('BMW 330xD', 30500, true , 'red', 240);
$car2 = new Car('Opel Vectra', 110550, true, 'blue', 220);

$carShop = new CarShop();
$carShop->addCar($car);
$carShop->addCar($car2);

echo 'Price of the model is: '. $car->getModel() . ' for scrap is ' . $car->calculatePriceForScrap(10000).'.' , PHP_EOL;
echo $person->buyCar($car2) , PHP_EOL;
echo 'After the deal ' .$person->getCar()->getModel().', '
		. $person->getName(). ' has '.$person->getMoney(). ' money.' , PHP_EOL;

echo 'After selling the car for scrap, ' . $person->getName(). ' has '.$person->sellCarForScrap(15000). ' money.' , PHP_EOL;

$car2->changeOwner($person2);
echo 'The new owner of the ' . $car2->getModel(). ' is: ' . $car2->getOwner()->getInfo();