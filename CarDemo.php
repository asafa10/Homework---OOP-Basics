<?php


require_once 'autoload.php';

$car1 = new Car('Mercedec c220', 240, 'yes', 'blue', 50000);

$car1->setCurrentGear(5);
$car1->accelerate(180);
$car1->changeGearDown();
$car1->changeGearDown();
$car1->changeGearUp();
$car1->changeColor('grey');
echo $car1->showCar(). PHP_EOL;

