<?php

class Root {
  private $controller;

  public function __construct() {
    $url = $this->parseUrl();

    $controllerName = $url[0] ?? 'home';
    $controllerClassName = ucfirst($controllerName) . 'Controller';
    $controllerFileName = 'controller/' . $controllerClassName . '.php';

    if (file_exists($controllerFileName)) {
      require_once($controllerFileName);
      $this->controller = new $controllerClassName();
    } else {
      // gestion d'erreur : afficher une page 404 par exemple
    }

    $actionName = $url[1] ?? 'index';
    if (method_exists($this->controller, $actionName)) {
      $this->controller->{$actionName}();
    } else {
      // gestion d'erreur : afficher une page 404 par exemple
    }
  }

  private function parseUrl() {
    if (isset($_GET['url'])) {
      return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    }
  }
}
