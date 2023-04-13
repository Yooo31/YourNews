<?php

class Database {
  private static $host = 'localhost';
  private static $dbname = 'nom_de_la_base_de_donnees';
  private static $username = 'nom_utilisateur';
  private static $password = 'mot_de_passe';

  public static function connect() {
    $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$username, self::$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
  }
}
?>
