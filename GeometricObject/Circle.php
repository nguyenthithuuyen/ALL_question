<?php


class Circle extends GeometricObject
{
    public $radius;
    public function __construct($color, $filled,$radius)
    {
        $this->radius=$radius;
        parent::__construct($color, $filled);
    }

    function getArea()
    {

        return pi()*$this->radius*2;
    }

    function getPerimeter()
    {
        return pi()*pow($this->radius,2);
        // TODO: Implement getPerimeter() method.
    }
}