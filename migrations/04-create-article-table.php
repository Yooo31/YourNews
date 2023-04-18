<?php

require_once 'core/Database.php';
require_once 'script/migrate.php';

$pdo = Database::connect();

if (!tableExists($pdo, 'articles')) {
  $query = "CREATE TABLE articles (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    user_id INT(11) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    preview VARCHAR(255) NOT NULL,
    filePath VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL,
    is_approved BOOLEAN DEFAULT false,
    reason_for_none_approuved TEXT DEFAULT NULL,
    is_private BOOLEAN DEFAULT false
  )";

  $pdo->exec($query);
}
