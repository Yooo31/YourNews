<?php

require_once 'core/Root.php';
require_once 'core/Database.php';

$db = Database::connect();

$router = new Root($_GET['url']);