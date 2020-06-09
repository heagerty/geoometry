<?php

namespace Geoometry;

use LogicException;

class Circle extends Shape
{

    protected $radius;
    const PI = 3.14159;


    /**
     * Circle constructor.
     * @param $radius
     */
    public function __construct($radius)
    {
        if ($radius < 0 ) {
            throw new LogicException("Lengths can't be negative!!!");
        }
        $this->radius = $radius;
    }


    public function __toString()
    {
        return '<div style="border-radius:' . $this->radius . 'px;
                            background:' . $this->color . ';"></div>';
    }



    function getPerimeter()
    {
        return $this->radius * self::PI * 2;
    }

    function getArea()
    {
        return $this->radius * $this->radius * self::PI;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }




}