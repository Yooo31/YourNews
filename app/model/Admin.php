<?php

require_once 'core/Database.php';

class Admin {
  private $db;

  public function __construct() {
    $this->db = Database::connect();
  }
}