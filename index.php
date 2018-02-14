
<?php

  $database = require 'core/bootstrap.php';

  $router = new Router();

  require 'routes.php';

  $request_uri = $_SERVER['REQUEST_URI'];

  require Router::load('routes.php')->direct(Request::uri($request_uri));
