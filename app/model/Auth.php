<?php

require_once 'core/Database.php';

class Auth {
  private $db;

  public function __construct() {
    $this->db = Database::connect();
  }
}