<?php

include_once "Shape.php";

class Rectangle extends Shape {
  public $width;
  public $height;

  //es neatceros🤷🏻‍♀️$width, $height🤷🏻‍♀️
  function __construct($color, $width, $height)
  {
    parent::__construct($color);
    $this->width = $width;
    $this->height = $height;
  }

  public function calculateArea()
  {
    return $this->width * $this->height;
  }
}