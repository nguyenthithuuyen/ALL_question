<?php


abstract class GeometricObject
{
    public $color;
    public $filled;
    public $dateCreated;


    public function __construct($color, $filled)
    {
        $this->color = $color;
        $this->filled = $filled;
        $this->dateCreated = date('y-m-d');
    }

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
     * @return mixed
     */
    public function istFilled()
    {
    }

    /**
     * @param mixed $filled
     */
    public function setFilled($filled)
    {
        $this->filled = $filled;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param mixed $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    public function toString()
    {
        return this;
    }

    abstract function getArea();

    abstract function getPerimeter();
}