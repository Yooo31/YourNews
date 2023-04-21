<?php

class Root {
  private $controller;
  private $routes = [];

  public function __construct($url)
  {
    $this->controller = new Controller();
    $this->parseUrl($url);
  }

  public function get($path, $controllerMethod)
  {
    $this->routes['GET'][$path] = $controllerMethod;
  }

  public function post($path, $controllerMethod)
  {
    $this->routes['POST'][$path] = $controllerMethod;
  }

  public function run()
  {
    $method = $_SERVER['REQUEST_METHOD'];
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $routeFound = false;

    foreach ($this->routes[$method] as $route => $controllerMethod) {
      // Si la route contient des paramètres, on construit une expression régulière pour les récupérer
      if (preg_match('#^' . preg_replace('#/:([\w]+)#', '/(?<$1>[^/]+)', $route) . '$#', $path, $matches)) {
        $routeFound = true;

        $controllerMethod = explode('@', $controllerMethod);
        $controllerName = $controllerMethod[0];
        $methodName = $controllerMethod[1];

        if (method_exists($controllerName, $methodName)) {
          $controller = new $controllerName();
          // On passe les paramètres de l'URL sous forme de tableau associatif à la méthode du contrôleur
          $controller->{$methodName}($matches);
        } else {
          // gestion d'erreur : afficher une page 404 par exemple
        }
        break;
      }
    }

    if (!$routeFound) {
      // gestion d'erreur : afficher une page 404 par exemple
    }
  }

  private function parseUrl($url)
  {
    $url = rtrim($url, '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);

    $controller = ucfirst($url[0]) . 'Controller';
    $this->controller = new $controller();

    $method = isset($url[1]) ? $url[1] : 'index';
    if (method_exists($this->controller, $method)) {
      $this->controller->{$method}();
    } else {
      // gestion d'erreur
    }
  }
}
