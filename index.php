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
?>

<!DOCTYPE html>
<html>
<head>
	<title>Titre par défaut</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="">
</head>

<body>
	<header>
		<!-- NAVBAR -->
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
