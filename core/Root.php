<?php
// core/Router.php

class Router {
  private $routes = [];

  public function get($path, $action) {
    $this->routes['GET'][$path] = $action;
  }

  public function post($path, $action) {
    $this->routes['POST'][$path] = $action;
  }

  public function notFound($action) {
    $this->routes['404'] = $action;
  }

  public function dispatch() {
    $method = $_SERVER['REQUEST_METHOD'];
    $path = $_SERVER['REQUEST_URI'];
    $path = parse_url($path, PHP_URL_PATH);

    if (!isset($this->routes[$method][$path])) {
      if (isset($this->routes['404'])) {
        $this->executeAction($this->routes['404']);
        return;
      }
      echo '404 Not Found';
      return;
    }

    $action = $this->routes[$method][$path];
    $this->executeAction($action);
  }

  private function executeAction($action) {
    [$controllerName, $methodName] = explode('@', $action);
    require_once "app/controller/$controllerName.php";
    $controller = new $controllerName();
    $controller->$methodName();
  }
}
