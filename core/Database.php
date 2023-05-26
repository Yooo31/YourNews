<?php

class Database {
  private static $host;
  private static $dbname;
  private static $username;
  private static $password;

  public static function connect() {
    self::loadEnv();

    echo self::$dbname;

    $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$username, self::$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
  }

  private static function loadEnv() {
    $dotenv = fopen('.env', 'r');
    while ($line = fgets($dotenv)) {
        $line = trim($line);
        if (!empty($line) && strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $_ENV[$key] = $value;
            $_SERVER[$key] = $value;
        }
    }
    fclose($dotenv);

    self::$dbname = $_ENV['HOST'];
    self::$dbname = $_ENV['DB_NAME'];
    self::$username = $_ENV['DB_USERNAME'];
    self::$password = $_ENV['DB_PASSWORD'];
  }
}
