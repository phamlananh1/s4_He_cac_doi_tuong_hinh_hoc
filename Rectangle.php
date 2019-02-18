<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-01-25
 * Time: 08:40
 */
include_once "Shape.php";
class Rectangle extends Shape
{
public $width;
public $height;
public function __construct($name, $height, $width)
{
    parent::__construct($name);
    $this->height = $height;
    $this->width = $width;
}
public function calculateArea(){
    return $this->width * $this->height;
}
public function calculatePerimeter(){
    return ($this->width + $this->height) *2;
}
}