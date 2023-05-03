<?php

require_once 'core/Database.php';

class Seeder {
  private $pdo;

  public function __construct() {
    $this->pdo = Database::connect();
  }

  public function seed($data, $table, $verificationColumn) {
    $tableName = $table;

    $this->pdo->beginTransaction();
    foreach ($data as $row) {
      $verificationValue = $row[$verificationColumn];

      $stmt = $this->pdo->prepare("SELECT * FROM `$tableName` WHERE `$verificationColumn` = :verificationValue");
      $stmt->execute(['verificationValue' => $verificationValue]);
      $existingData = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($existingData) {
        $id = $existingData['id'];
        unset($row['id']);
        $this->updateRow($tableName, $id, $row);
      } else {
        $this->insertRow($tableName, $row);
      }
    }

    $this->pdo->commit();
  }

  private function insertRow($tableName, $data) {
    $columns = implode(',', array_keys($data));
    $placeholders = implode(',', array_fill(0, count($data), '?'));

    $stmt = $this->pdo->prepare("INSERT INTO `$tableName` ($columns) VALUES ($placeholders)");

    try {
      $stmt->execute(array_values($data));
    } catch (PDOException $e) {
      $this->pdo->rollBack();
      throw new Exception($e->getMessage());
    }
  }

  private function updateRow($tableName, $id, $data) {
    $sets = implode(',', array_map(function ($column) {
      return "$column = ?";
    }, array_keys($data)));

    $stmt = $this->pdo->prepare("UPDATE `$tableName` SET $sets WHERE id = ?");

    try {
      $stmt->execute(array_merge(array_values($data), [$id]));
    } catch (PDOException $e) {
      $this->pdo->rollBack();
      throw new Exception($e->getMessage());
    }
  }
}
