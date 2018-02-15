<?php

namespace App\Core;

// Fetch information about the currect browser request
class Request {
  public static function uri() {
    // get just the url without anything from the '?' or
    // after
    $just_the_url = parse_url($_SERVER['REQUEST_URI']);

    // Trim off any leading or trailing forward slashes
    return trim($just_the_url['path'], "/");
  }
  // Are we doing a GET or POST
  public static function method() {
    return $_SERVER['REQUEST_METHOD']; // returns GET or POST
  }
}
?>
