<?php

require_once 'core/Database.php';
require_once dirname(__FILE__) . '/script/Migrate.php';

$pdo = Database::connect();

if (!tableExists($pdo, 'comments')) {
  $query = "CREATE TABLE comments (
            id INT(11) PRIMARY KEY AUTO_INCREMENT,
            user_id INT(11) NOT NULL,
            article_id INT(11) NOT NULL,
            content TEXT NOT NULL,
            is_approved BOOLEAN DEFAULT false,
            validated_by INT(11) DEFAULT NULL,
            validated_at DATETIME NOT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME DEFAULT NULL
    )";

  $pdo->exec($query);
}
