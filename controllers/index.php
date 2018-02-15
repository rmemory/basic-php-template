<?php

  // The database object is created by the top level index.php
  // But the interaction with the database occurs here in the index
  // controller
  $tasks = $app['database']->selectAll('todos');

  // Get all user names currently in database
  $users = $app['database']->selectAll('users');

  require 'views/index.view.php';
?>
