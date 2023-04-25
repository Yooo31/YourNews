<?php

require_once 'Controller.php';

class Router {
  public function parseUri($uri) {
    $parsedUri = explode('/', $uri);

    return $parsedUri[1];
  }
}