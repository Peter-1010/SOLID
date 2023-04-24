<?php
use SOLID\LSP\Rectangle;
use SOLID\LSP\Square;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$rectangle = new Rectangle(10, 2);

echo $rectangle->calculateArea();