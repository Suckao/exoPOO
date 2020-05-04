<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bike1 = new Bicycle('green', 1);

$car1 = new Car('red', 4, 'fuel');

$bike1 -> forward();
var_dump($bike1->switchOff());

var_dump($car1->switchOff());




