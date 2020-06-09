<?php

namespace Geoometry;


class Square extends Rectangle
{


    /**
     * Square constructor.
     */
    public function __construct($width)
    {
        parent::__construct($width, $width);
    }
}