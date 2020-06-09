<?php

use Geoometry\Shape;
use Geoometry\Rectangle;
use Geoometry\Square;

spl_autoload_register('autoloadClass');

function autoloadClass($class) {

    $class[9] = '/';
    require_once  'classes/'.$class . '.php';

}

$rectangle = new Rectangle(200, 150);

$rectangle->setWidth(200);
$rectangle->setHeight( 150);
$rectangle->setColor('blue');

//var_dump($rectangle);

$sq = new Square(100);

//var_dump($sq);

try {
    $minusSquare = new Square(-10);
} catch(Exception $exception) {
    echo "Fatal error: Uncaught LogicException: Radius must be greater than 0!";
}

echo $rectangle;