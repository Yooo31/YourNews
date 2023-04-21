<?php

require_once 'core/Root.php';
require_once 'core/Database.php';
require_once 'core/Session.php';

Session::start();

$db = Database::connect();

$root = new Root($_GET['url']);

$root->get('/', 'HomeController@index');
$root->get('/login', 'AuthController@loginForm');
$root->post('/login', 'AuthController@login');
$root->get('/register', 'AuthController@registerForm');
$root->post('/register', 'AuthController@register');
$root->get('/logout', 'AuthController@logout');
$root->get('/post/create', 'PostController@create');
$root->post('/post', 'PostController@store');
$root->get('/post/:id/edit', 'PostController@edit');
$root->post('/post/:id', 'PostController@update');
$root->post('/post/:id/delete', 'PostController@delete');
$root->post('/post/:id/approve', 'PostController@approve');
$root->post('/post/:id/reject', 'PostController@reject');
$root->post('/comment/:id', 'CommentController@store');
$root->post('/comment/:id/delete', 'CommentController@delete');
$root->post('/comment/:id/approve', 'CommentController@approve');
$root->post('/comment/:id/reject', 'CommentController@reject');
$root->get('/user/:id', 'UserController@show');
$root->post('/user/:id/delete', 'UserController@delete');
$root->post('/user/:id/promote', 'UserController@promote');
$root->post('/user/:id/demote', 'UserController@demote');

$root->run();
