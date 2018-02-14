<?php

  // The database object is created by the top level index.php
  // But the interaction with the database occurs here in the index
  // controller
  $tasks = $app['database']->selectAll('todos');

  require 'views/index.view.php';
?>
