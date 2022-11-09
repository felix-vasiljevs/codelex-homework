<?php
require_once 'car.php';
require_once 'odometer.php';
require_once 'fuel-gauge.php';


$car = new Car(
    new FuelGauge(2),
    new Odometer()
);

while ($car->getFuelGauge()->getAmount() > 0)
{
    echo "We drove 1km" . PHP_EOL;
    $car->drive();

    echo "FuelGauge: {$car->getFuelGauge()->getAmount()} / Odometer: {$car->getOdometer()->getMileage()}";
    echo PHP_EOL;

    sleep(1);
}




//var_dump($fuelGauge->getAmount());
//$fuelGauge->fill(10);
//var_dump($fuelGauge->getAmount());
//$fuelGauge->use(40);
//var_dump($fuelGauge->getAmount());