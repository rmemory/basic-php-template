<?php
  class Router {
    public $routes = [
      'GET' => [],
      'POST' => []
      //PATCH
      //PUT
      //DELETE
    ];

    public static function load($file) {
      $router = new static;
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
      //   return $this->routes[$uri];
      // return the controller for the uri and requestType
        return $this->routes[$requestType][$uri];
      }

      throw new Exception("No route defined");
    }
  }
 ?>
