<?php
class Math {
  /*
     Statics are useful for utility methods. They are far less useful
     or testable when they make references to other classes
  */
  public static function add(...$nums) {
    return array_sum(func_get_args());
  }
}

class Person {
  // This variable is class wide, and would be the same var for
  // all Persons == bad.
  public static $age = 1;

  public function haveBirthday() {
    static::$age += 1;
  }
}

// $math = new Math;

// var_dump($math->add(1,2,3,4));

echo Math::add(1,2,3,4);

?>
