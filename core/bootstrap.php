<?php

  use App\Core\App;

  App::bind('config', require 'config.php');

  App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])));

  function view($name, $data = []) {
    /*
      extract function will take this array,
      ['name' => 'joe', 'age' =>25]
      and it will create these variables
      $name = 'joe';
      $age = 25;
    */
    extract($data);
    return require "app/views/{$name}.view.php";
  }
?>
