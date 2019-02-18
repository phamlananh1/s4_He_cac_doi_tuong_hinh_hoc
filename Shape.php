<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-01-25
 * Time: 08:21
 */

class Shape
{
public $name;
public function __construct($name)
{
    $this->name = $name;
}
public function show(){
    return "i am a shape";
}
}