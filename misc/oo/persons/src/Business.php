<?php

namespace Acme;

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
