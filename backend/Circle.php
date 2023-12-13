<?php
 include_once("Shape.php");
class Circle extends Shape {
  public $radius;

  function __construct($radius) {
    $this->radius = $radius;
  }
}