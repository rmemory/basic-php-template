<?php

require 'vendor/autoload.php';

use Acme\Person;
use Acme\Staff;
use Acme\Business;

$john = new Person('John Doe');
$john->setAge(30);

var_dump($john->getAgeInDays());

$staff = new Staff;

$myBusiness = new Business($staff);

$myBusiness->hire($john);

var_dump($staff);


?>
