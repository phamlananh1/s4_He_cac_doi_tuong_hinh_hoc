<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-01-25
 * Time: 08:50
 */
include_once "Cricle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Square.php";
$circle = new Cricle("Circle 01", 3);
echo "Dien tich: ". $circle->calculateArea() ."<br>";
echo "Chu vi: ". $circle->calculatePerimeter()."<br>";
$cylinder = new Cylinder("Cylinder 01", 3, 4);
echo "Dien tich: ". $circle->calculateArea() ."<br>";
echo "Chu vi: ". $circle->calculatePerimeter()."<br>";
$rectangle = new Rectangle("Rectangle 01", 3, 4 );
echo "Dien tich: ". $circle->calculateArea() ."<br>";
echo "Chu vi: ". $circle->calculatePerimeter()."<br>";
$square = new Square("Square 01", 4, 4, 4);
echo "Dien tich: ". $circle->calculateArea() ."<br>";
echo "Chu vi: ". $circle->calculatePerimeter()."<br>";