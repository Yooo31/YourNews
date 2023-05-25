<?php

require_once 'core/Database.php';

class Auth {
  private $db;

  public function __construct() {
    $this->db = Database::connect();
  }

  public function getUserByUsername($username) {
    $query = "SELECT * FROM users WHERE username = :username";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}