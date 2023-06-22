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

  public function createUser($email, $password, $name, $lastname, $username) {
    $query = "INSERT INTO users (email, password, name, lastname, username, created_at) VALUES (:email, :password, :name, :lastname, :username, NOW())";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':username', $username);
    return $stmt->execute();
  }
}