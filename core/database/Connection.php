<?php

class Connection {
    public static function make($config) {
      try {
        // $pdo = new PDO("mysql:host=localhost;dbname=mytodo", "root", "<insert_password>");
        $pdo = new PDO(
          $config['connection'].';dbname='.$config['name'],
          $config['username'],
          $config['password'],
          $config['options']
        );
        return $pdo;
      } catch (PDOException $e) {
        die ("Could not connect to the database: $e.getMessage()");
      }
    }
}

?>
