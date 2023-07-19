<?php

require_once 'core/Database.php';

class Home {
  private $db;

  public function __construct() {
    $this->db = Database::connect();
  }

  public function getLatestArticle() {
    $query = $this->db->prepare('SELECT * FROM articles WHERE is_approved = true ORDER BY created_at DESC LIMIT 1');
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
  }

  public function getLatestArticles($limit) {
    $query = $this->db->prepare('SELECT * FROM articles WHERE is_approved = true ORDER BY created_at DESC LIMIT :limit OFFSET 1');
    $query->bindValue(':limit', $limit, PDO::PARAM_INT);
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
  }
}

