<?php

namespace Geoometry;

abstract class Shape
{

    protected $color = 'black';


    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return float
     */
    abstract function getPerimeter();

    /**
     * @return float
     */
    abstract function getArea();



}