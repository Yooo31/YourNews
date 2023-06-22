<?php

require_once 'core/Database.php';

class Posts {
  private $db;

  public function __construct() {
    $this->db = Database::connect();
  }

  public function getListArticles($limit, $page) {
    $query = $this->db->prepare('SELECT * FROM articles ORDER BY created_at DESC LIMIT :limit OFFSET :offset');
    $query->bindValue(':limit', $limit, PDO::PARAM_INT);
    $query->bindValue(':offset', $page * 9, PDO::PARAM_INT);
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getPostBySlug($slug) {
    $query = "SELECT * FROM articles WHERE filePath = :slug";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':slug', $slug);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}

