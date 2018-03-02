<?php

abstract class Shape {
  protected $color;

  public function __construct($color = 'red') {
    $this->color = $color;
  }

  public function getColor() {
    return $this->$color;
  }

  abstract protected function getArea();
}

class Square extends Shape {
  protected $length = 4;

  public function getArea() {
    return pow($this->length, 2);
  }
}

class Triangle extends Shape {
  protected $base = 4;
  protected $height = 7;

  public function getArea() {
    return 0.5 * $height * $base;
  }
}

class Circle extends Shape {
  protected $radius;

  public function __construct($radius = 1) {
    parent::__construct('green');
    $this->radius = $radius;
  }

  public function getArea() {
    return M_PI * pow($this->radius, 2);
  }
}

var_dump((new Circle(2))->getArea());
?>
