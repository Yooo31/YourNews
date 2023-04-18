<?php

require_once 'core/Database.php';
require_once 'script/migrate.php';

$pdo = Database::connect();

if (!tableExists($pdo, 'users')) {
  $query = "CREATE TABLE users (
        id INT(11) PRIMARY KEY AUTO_INCREMENT,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        created_at DATETIME NOT NULL,
        username VARCHAR(255) NOT NULL,
        account_type ENUM('reader', 'modo', 'admin') DEFAULT 'reader',
        is_validated BOOLEAN DEFAULT false,
        is_banned BOOLEAN DEFAULT false,
        reason_for_ban TEXT DEFAULT NULL
    )";

  $pdo->exec($query);
}
