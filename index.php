<?php

use SOLID\SRP\Bus;
use SOLID\SRP\Driver;
use SOLID\SRP\Route;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$peter = new Driver('Peter Anwer', 19, '1', 'Egypt El Minya');
$route300 = new Route('A', 'B', 300);
$route280 = new Route('C', 'D', 280);

$bus = new Bus(201);
$bus->setColor('RED');
$bus->setDoors(3);
$bus->setMaximumSpeed(100);
$bus->setDriver($peter);
$bus->setNumberOfPassengers(62);
$bus->addRoutes($route300);
$bus->addRoutes($route280);

//var_dump($bus);
$bus->move();