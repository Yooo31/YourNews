<?php
// index.php

require_once 'core/Router.php';
require_once 'core/Controller.php';

$router = new Router();

// définition des routes
$router->get('/', 'HomeController@index');
$router->get('/posts', 'PostsController@index');
$router->get('/posts/create', 'PostsController@create');
$router->post('/posts/store', 'PostsController@store');
$router->get('/compte', 'CompteController@index');
$router->get('/admin', 'AdminController@index');
$router->notFound('ErrorController@notFound');

// exécution de la route correspondante
$router->dispatch();
