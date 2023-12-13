<?php

abstract class Shape {
  public $color;

  function __construct($color)
  {
    $this->color = $color;
  }
  abstract function calculateArea();
}