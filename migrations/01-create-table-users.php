<?php

require_once 'script/migrate.php';

if (!tableExists('users')) {
    $query = "CREATE TABLE users (
        id INT(11) PRIMARY KEY AUTO_INCREMENT,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        created_at DATETIME NOT NULL,
        username VARCHAR(255) NOT NULL,
        account_type ENUM('rédacteur', 'modérateur', 'admin') NOT NULL,
        is_validated BOOLEAN NOT NULL,
        is_banned BOOLEAN NOT NULL,
        reason_for_ban TEXT DEFAULT NULL
    )";
}

?>
