<?php

require_once 'core/Database.php';
require_once 'script/migrate.php';

$pdo = Database::connect();

if (!tableExists($pdo, 'comments')) {
  $query = "CREATE TABLE comments (
            id INT(11) PRIMARY KEY AUTO_INCREMENT,
            user_id INT(11) NOT NULL,
            article_id INT(11) NOT NULL,
            content TEXT NOT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME DEFAULT NULL,
            is_approved BOOLEAN DEFAULT false
    )";

  $pdo->exec($query);
}
