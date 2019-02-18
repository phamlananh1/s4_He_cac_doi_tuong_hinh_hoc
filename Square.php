<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-01-25
 * Time: 08:46
 */
include_once "Rectangle.php";
class Square extends Rectangle
{
public function __construct($name, $width)
{
    parent::__construct($name, $width, $width, $width);
}
}