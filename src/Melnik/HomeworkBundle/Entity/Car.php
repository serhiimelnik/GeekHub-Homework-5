<?php

namespace Melnik\HomeworkBundle\Entity;

class Car
{
    public $make;
    public $model;
    public $price;
    public $bodyStyle;
    public $color;

    public function setMake($make)
    {
        $this->make = $make;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setBodyStyle($bodyStyle)
    {
        $this->bodyStyle = $bodyStyle;
    }

    public function getBodyStyle()
    {
        return $this->bodyStyle;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}
