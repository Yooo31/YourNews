<?php

require_once 'core/Database.php';

class DeletedPost {
  private $db;

  public function __construct() {
    $this->db = Database::connect();
  }

  public function createPost($deleter_id, $article_id) {
    $query = "INSERT INTO deletedPosts (deleter_id, article_id)
              VALUES (:deleter_id, :article_id)";

    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':deleter_id', $deleter_id);
    $stmt->bindParam(':article_id', $article_id);

    return $stmt->execute();
  }
}
