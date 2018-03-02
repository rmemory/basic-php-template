<?php

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

  class Business {
    // has-a, not is-a
    protected $staff;

    public function __construct(Staff $staff) {
      $this->staff = $staff;
    }

    public function hire(Person $person) {
      // add $person to Staff collection
      $this->staff->add($person);
    }

    public function getStaffMembers() {
      $this->staff->getMembers();
    }
  }

  class Staff {
    protected $members = [];

    public function __construct($members = []) {
      $this->members = $members;
    }

    public function add(Person $person) {
        $this->members[] = $person;
    }

    public function getMembers() {
      return $this->members;
    }
  }

  $john = new Person('John Doe');
  $john->setAge(30);

  var_dump($john->getAgeInDays());

  $staff = new Staff;

  $myBusiness = new Business($staff);

  $myBusiness->hire($john);

  var_dump($staff);

?>
