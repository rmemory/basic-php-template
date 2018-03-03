In order to set up a namespace ...

1) Put your various classes into their own directory, in this case "src".

2) Add "namespace ACME;" to each one.

3) In this directory, add an empty "composer.json" file, with just brackets

{


}

4) Run "composor install"

5) Add this to the composor.json file ...

"autoload": {
  "psr-4": {
    "Acme\\": "src"
  }
}

6) Run "composor dump-autoload". The composor/autoload_psr4.php has this line:

'Acme\\' => array($baseDir . '/src'),

7) In ex.php, add this (note, this is typically pulled in by an index.php,
which in turn might require the ex.php)

require 'vendor/autoload.php';

8) In ex.php

use Acme\Person;
use Acme\Staff;
use Acme\Business;
