<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-01-25
 * Time: 08:26
 */
include_once "Shape.php";

class Cricle extends Shape
{
    public $radius;
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;

    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);

    }
    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }

}