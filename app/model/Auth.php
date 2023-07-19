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

  public function getUserById($id) {
    $query = "SELECT * FROM users WHERE id = :id";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function getAllUsers() {
    $query = "SELECT * FROM users";
    $stmt = $this->db->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function updateUser($colName, $value, $elementId, $reason_for_ban) {
    $query = "UPDATE users SET $colName = :value, reason_for_ban = :reason_for_ban  WHERE id = :elementId";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':value', $value);
    $stmt->bindParam(':elementId', $elementId);
    $stmt->bindParam(':reason_for_ban', $reason_for_ban);

    return $stmt->execute();
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