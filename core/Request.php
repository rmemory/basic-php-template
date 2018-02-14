<?php

// Fetch information about the currect browser request
class Request {
  public static function uri($request_uri) {
    $request_uri = trim($request_uri, "/");
    return $request_uri;
  }
}


?>
