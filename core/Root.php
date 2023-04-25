<?php

require_once 'Controller.php';

class Router
{
  private $uri;
  private $parsedUri;
  private $controller;
  private $method;

  public function __construct()
  {
    $this->uri = $_SERVER['REQUEST_URI'];
    $this->parsedUri = explode('/', $this->uri);
    $this->controller = ucfirst($this->parsedUri[1]) . 'Controller';
    $this->method = isset($this->parsedUri[2]) ? $this->parsedUri[2] : 'index';
  }

  public function handleRequest()
  {
    if (class_exists($this->controller)) {
      $controller = new $this->controller();
      if (method_exists($controller, $this->method)) {
        $controller->{$this->method}();
      } else {
        http_response_code(404);
        echo '404 Not Found';
      }
    } else {
      http_response_code(404);
      echo '404 Not Found';
    }
  }
}
