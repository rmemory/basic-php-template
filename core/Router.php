<?php

  namespace App\Core;

  use App\Controllers\PagesController;

  class Router {
    public $routes = [
      'GET' => [],
      'POST' => []
      //PATCH
      //PUT
      //DELETE
    ];

    public static function load($file) {
      // Create Router instance
      $router = new static;
      // Import routes
      require $file;

      return $router;
    }

    // Our routes is no longer a single
    // dimensional array and this method
    // no longer makes sense
    // public function define($routes) {
    //   $this->routes = $routes;
    // }

    public function get($uri, $controller) {
      $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
      $this->routes['POST'][$uri] = $controller;
    }

    // $requestType will be either GET or POST
    public function direct($uri, $requestType) {


      if (array_key_exists($uri, $this->routes[$requestType])) {
      // return $this->routes[$uri];
      // return the controller for the uri and requestType
      // return $this->routes[$requestType][$uri];

      return $this->callAction(
        /*
          explode returns an array. The '...' operator splits
          them into individual args, which requires php 5 or higher
        */
        ...explode('@', $this->routes[$requestType][$uri])
      );
      }

      throw new Exception("No route defined");
    }

    protected function callAction($controller, $action) {

      // New up the controller
      // Add namespaces, this allows the paths in the
      // routes.php file to remain as simple as possible.
      $controller = "App\\Controllers\\{$controller}";
      $controller = new $controller;

      if (! method_exists($controller, $action)) {
        throw new Exception("$controller does not respond to the $action action");
      }

      return $controller->$action();
    }
  }
 ?>
