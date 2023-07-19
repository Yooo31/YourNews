<?php

require_once 'core/Database.php';

class Admin {
  private $db;

  public function __construct() {
    $this->db = Database::connect();
  }

  public function addElement($article_id, $reason, $moderator_id) {
    $query = "INSERT INTO moderations (article_id, reason, moderator_id, created_at) VALUES (:article_id, :reason, :moderator_id, NOW())";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':article_id', $article_id);
    $stmt->bindParam(':reason', $reason);
    $stmt->bindParam(':moderator_id', $moderator_id);

    return $stmt->execute();
  }
}