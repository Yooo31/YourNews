<?php
error_reporting(E_ALL);


require_once 'core/Routeur.php';

$uri = $_SERVER['REQUEST_URI'];

$router = new Router();
$valRouter = $router -> parseUri($uri);

switch($valRouter) {
  case '':
    require_once 'app/controller/HomeController.php';
    $controller = new HomeController();
    $controller->index();
    break;

  case 'posts':
    echo 'Page des posts';
    break;

  case 'new':
    echo 'Page de création de posts';
    break;

  case 'compte':
    echo 'Comptes';
    break;

  case 'admin':
    echo 'admin';
    break;

  default:
    echo '404';
    break;
}
