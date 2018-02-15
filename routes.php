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
  // $router->get('', 'controllers/index.php');
  // $router->get('index.php', 'controllers/index.php');
  // $router->get('about', 'controllers/about.php');
  // $router->get('about-culture', 'controllers/about-culture.php');
  // $router->get('contact', 'controllers/contact.php');
  // $router->post('names', 'controllers/add-name.php');

  $router->get('', 'PagesController@home');
  $router->get('index.php', 'PagesController@home');
  $router->get('about', 'PagesController@about');
  $router->get('about-culture', 'PagesController@about_culture');
  $router->get('contact', 'PagesController@contact');
  $router->post('names', 'PagesController@add_names');

  // Here 'index' is a convention that means, display all
  // users.
  $router->get('users', 'UsersController@index')

 ?>
