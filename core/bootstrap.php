<?php

  App::bind('config', require 'config.php');
  // $app = [];
  // $app['config'] = require 'config.php';

  // No longer needed due to autoloader from composer

  // require 'core/Router.php';
  // require 'core/Request.php';
  // require 'core/database/Connection.php';
  // require 'core/database/QueryBuilder.php';

  App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])));

  // $app['database'] = new QueryBuilder(
  //   Connection::make($app['config']['database'])
  // );
?>
