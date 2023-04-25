<?php
// index.php

require_once 'core/Router.php';
require_once 'core/Controller.php';

$router = new Router();

// définition des routes
$router->get('/', 'HomeController@index');
$router->get('/posts', 'PostsController@index');
$router->get('/posts/create', 'PostsController@create');
$router->get('/compte', 'CompteController@index');
$router->get('/admin', 'AdminController@index');

// exécution de la route correspondante
$router->dispatch();
