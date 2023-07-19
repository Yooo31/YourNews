<?php

require_once 'core/Database.php';
require_once dirname(__FILE__) . '/script/Migrate.php';

$pdo = Database::connect();

if (!tableExists($pdo, 'articles')) {
  $query = "CREATE TABLE articles (
            id INT(11) PRIMARY KEY AUTO_INCREMENT,
            user_id INT(11) NOT NULL,
            title VARCHAR(255) NOT NULL,
            description TEXT NOT NULL,
            preview VARCHAR(255) NOT NULL,
            content TEXT NOT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            approved_at DATETIME DEFAULT NULL,
            as_moderated BOOLEAN DEFAULT false,
            is_approved BOOLEAN DEFAULT false,
            is_private BOOLEAN DEFAULT false
    )";

  $pdo->exec($query);
}
