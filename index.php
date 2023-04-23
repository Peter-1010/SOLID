<?php

use SOLID\SRP\Bus;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$bus = new Bus(201);
$bus->setDriverName('Peter Anwer');
$bus->setDriverAge(19);
$bus->setColor('RED');
$bus->setDoors(3);
$bus->setMaximumSpeed(100);
$bus->setNumberOfPassengers(62);

var_dump($bus->getMaximumSpeed());