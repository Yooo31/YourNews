<?php

class Database {
  private static $host = 'localhost';
  private static $dbname = 'YourNews';
  private static $username = 'ynAdmin';
  private static $password = 'ynpass';

  public static function connect() {
    $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$username, self::$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
  }
}
?>
