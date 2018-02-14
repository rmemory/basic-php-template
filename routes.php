<?php
  // $router->define([
  //   '' => 'controllers/index.php',
  //   'index.php' => 'controllers/index.php',
  //   'about' => 'controllers/about.php',
  //   'about-culture' => 'controllers/about-culture.php',
  //   'contact' => 'controllers/contact.php',
  //   'names' => 'controllers/add-name.php' //Should only work for post
  //                                         // operations and not get
  //                                         // operations.
  // ]);

  // Support for both gets and posts
  $router->get('', 'controllers/index.php');
  $router->get('index.php', 'controllers/index.php');
  $router->get('about', 'controllers/about.php');
  $router->get('about-culture', 'controllers/about-culture.php');
  $router->get('contact', 'controllers/contact.php');
  $router->post('names', 'controllers/add-name.php');
 ?>
