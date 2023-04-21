<?php

require_once 'Controller.php';

class Root {
  public function parseUri($uri) {
    $parsedUri = explode('/', $uri);

    return $parsedUri[1];
  }
}