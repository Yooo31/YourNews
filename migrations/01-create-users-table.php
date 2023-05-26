<?php

require_once 'core/Database.php';
require_once dirname(__FILE__) . '/script/Migrate.php';

$pdo = Database::connect();

if (!tableExists($pdo, 'users')) {
  $query = "CREATE TABLE users (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    account_type ENUM('reader', 'modo', 'admin') DEFAULT 'reader',
    is_validated BOOLEAN DEFAULT false,
    is_banned BOOLEAN DEFAULT false,
    reason_for_ban TEXT DEFAULT NULL,
    created_at DATETIME NOT NULL
  )";

  $pdo->exec($query);
}
