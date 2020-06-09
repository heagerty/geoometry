<?php

namespace Geoometry;

use LogicException;

class Rectangle extends Shape
{

    private $width;
    private $height;


    /**
     * Rectangle constructor.
     * @param $width
     * @param $height
     */
    public function __construct($width, $height)
    {
        if ($height < 0 || $width < 0) {
            throw new LogicException("Lengths can't be negative!!!");
        }
        $this->width = $width;
        $this->height = $height;
    }

    public function __toString()
    {
        return '<div style="width:' . $this->width . 'px; height:' . $this->height . 'px; background:' . $this->color . ';"></div>';
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = abs($width);
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = abs($height);
    }


    function getPerimeter()
    {
        return ($this->height + $this->width) * 2;
    }

    function getArea()
    {
        return $this->height * $this->width;
    }


}