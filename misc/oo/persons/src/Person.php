<?php

namespace Acme;

class Person {
  protected $name;
  protected $age;

  public function __construct($name) {
    $this->name = $name;
  }

  public function getAgeInDays() {
    return $this->age * 365;
  }

  public function setAge($age) {
    if ($age < 18) {
      throw new Exception("Person is not old enough");
    }

    $this->age = $age;
  }
}
