<?php

use SOLID\OCP\Car;
use SOLID\OCP\Bus;
use SOLID\OCP\Plane;
use SOLID\OCP\Ship;
use SOLID\OCP\Driver;
use SOLID\OCP\Route;
use SOLID\OCP\Trip;
use SOLID\OCP\MoveOnTheRoads;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$peter = new Driver('Peter Anwer', 19, '1', 'Egypt El Minya');
$route300 = new Route('A', 'B', 300);
$route280 = new Route('C', 'D', 280);

$bus = new Plane(201);
$bus->setColor('RED');
$bus->setMaximumSpeed(100);
$bus->setDriver($peter);
$bus->addRoutes($route300);
$bus->addRoutes($route280);
$bus->setMovable(new \SOLID\OCP\MoveInTheSky());

$trip = new Trip($bus, 'T201', 35.25, 120);

echo $trip->move();