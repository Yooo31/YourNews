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

  public function createPost($titre, $description, $postArea) {
    $query = "INSERT INTO articles (user_id, title, description, preview, content, created_at, updated_at) VALUES (3, :title, :description, 'jsp.png', :content, NOW(), NOW())";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':title', $titre);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':content', $postArea);


    return $stmt->execute();
  }
}

