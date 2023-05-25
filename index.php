<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

require_once 'core/Router.php';
require_once 'core/Controller.php';

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/posts', 'PostsController@index');
$router->get('/posts/create', 'PostsController@create');
$router->get('/compte', 'CompteController@index');
$router->get('/admin', 'AdminController@index');
$router->get('/connexion', 'AuthController@showLoginForm');
$router->match('POST', '/connexion', 'AuthController@login');
$router->get('/inscription', 'AuthController@showRegistrationForm');
$router->match('POST', '/inscription', 'AuthController@register');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Titre par défaut</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/base.css">
	<link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/articles_list.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="page">
	<header>
		<?php require_once 'app/navbar.php'; ?>
	</header>

	<main>
		<?php $router->dispatch(); ?>
	</main>

	<footer>
		<!-- FOOTER -->
	</footer>

	<script type="text/javascript" src=""></script>
</body>

</html>
