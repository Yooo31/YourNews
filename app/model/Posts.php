<?php

require_once 'core/Database.php';

class Posts {
  private $db;

  public function __construct() {
    $this->db = Database::connect();
  }

  public function getListArticles($limit, $page) {
    $query = $this->db->prepare('SELECT * FROM articles WHERE is_approved = true ORDER BY created_at DESC LIMIT :limit OFFSET :offset');
    $query->bindValue(':limit', $limit, PDO::PARAM_INT);
    $query->bindValue(':offset', $page * 9, PDO::PARAM_INT);
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getallArticles() {
    $query = $this->db->prepare(' SELECT articles.*, users.username AS creator_username
                                  FROM articles
                                  INNER JOIN users ON articles.user_id = users.id
                                  WHERE as_moderated = false');
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getPostById($id) {
    $query = "SELECT articles.*, users.username AS creator_username
              FROM articles
              INNER JOIN users ON articles.user_id = users.id
              WHERE articles.id = :id";

    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function createPost($titre, $description, $postArea, $user_id) {
    $query = "INSERT INTO articles (user_id, title, description, preview, content, created_at, updated_at) VALUES (:user_id, :title, :description, 'jsp.png', :content, NOW(), NOW())";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':title', $titre);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':content', $postArea);
    $stmt->bindParam(':user_id', $user_id);

    return $stmt->execute();
  }

  public function blockPost($elementId) {
    $query = "UPDATE articles SET approved_at = NOW(), as_moderated = 1 WHERE id = :elementId";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':elementId', $elementId);

    return $stmt->execute();
  }

  public function authorizePost($elementId) {
    $query = "UPDATE articles SET approved_at = NOW(), is_approved = 1, as_moderated = 1 WHERE id = :elementId";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':elementId', $elementId);

    return $stmt->execute();
  }

  public function deletePost($id) {
    $sql = "DELETE FROM articles WHERE id = :id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':id', $id);

    return $stmt->execute();
  }
}
