<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-01-25
 * Time: 08:35
 */
include_once "Cricle.php";
class Cylinder extends Cricle
{
public $height;
public function __construct($name, $radius, $height)
{
    parent::__construct($name, $radius);
    $this->height = $height;
}
public function calculateArea()
{
    return parent::calculateArea() *2 + parent::calculatePerimeter() * $this->height; // TODO: Change the autogenerated stub
}
public function calculatePerimeter()
{
    return parent::calculatePerimeter() * $this->height; // TODO: Change the autogenerated stub
}
}