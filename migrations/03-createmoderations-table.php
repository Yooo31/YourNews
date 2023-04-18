<?php

require_once 'core/Database.php';
require_once 'script/migrate.php';

$pdo = Database::connect();

if (!tableExists($pdo, 'moderations')) {
  $query = "CREATE TABLE moderations (
        id INT(11) PRIMARY KEY AUTO_INCREMENT,
        moderator_id INT(11) NOT NULL,
        article_id INT(11) DEFAULT NULL,
        comment_id INT(11) DEFAULT NULL,
        created_at DATETIME NOT NULL,
        reason TEXT NOT NULL
    )";

  $pdo->exec($query);
}
