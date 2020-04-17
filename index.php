<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$Velo = new Bicycle('blue', 1);


$car = new Car('green', 4, 'electric');


$pouet = new Truck('red', 4, 'fuel', 100);


$pouet2 = new Truck('yellow', 4, 'fuel', 100);


/*$route1 = new MotorWay();
$voiture = new Car("blue", "4", "fuel");
$voiture2 = new Car("red", "4", "fuel");
$route1 ->addVehicule($voiture);
$route1 -> addVehicule($voiture2);


$route2 = new PedestrianWay();
$bike = new Bicycle("blue", "1");
$skateBoard = new Bicycle("Red", "1");
$route2 ->addVehicule($bike);
$route2 ->addVehicule($skateBoard);


$route3 = new ResidentialWay();
$route3 ->addVehicule($bike);
$route3 ->addVehicule($skateBoard);
$route3 ->addVehicule($voiture);

*/

$homer = new Car('blue', 4, 'fuel');

$homer->setHasParkBrake(false);
$homer->start();


