
<?php

use App\Core\Router;
use App\Core\Request;

// The following three lines cause php errors to be displayed
// in the browser
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
Set this in the php.ini file to display parse errors:

display_errors = on
*/

  require 'vendor/autoload.php';
  require 'core/bootstrap.php';

  Router::load('app/routes.php')->direct(Request::uri(), Request::method());
