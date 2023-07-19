<?php

require_once 'core/Database.php';
require_once dirname(__FILE__) . '/script/Migrate.php';

$pdo = Database::connect();

if (!tableExists($pdo, 'deletedPosts')) {
  $query = "CREATE TABLE deletedPosts (
            id INT(11) PRIMARY KEY AUTO_INCREMENT,
            deleter_id INT(11) NOT NULL,
            article_id INT(11) DEFAULT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

  $pdo->exec($query);
}
