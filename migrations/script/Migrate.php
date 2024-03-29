<?php

require_once 'core/Database.php';

function tableExists($pdo, $tableName) {
  $stmt = $pdo->prepare("SHOW TABLES LIKE ?");
  $stmt->execute([$tableName]);

  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  return $result !== false;
}

function columnExists($pdo, $tableName, $columnName) {
  $stmt = $pdo->prepare("SHOW COLUMNS FROM $tableName LIKE ?");
  $stmt->execute([$columnName]);

  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  return $result !== false;
}

$migrationFiles = glob('migrations/*.php');

usort($migrationFiles, function($a, $b) {
  $prefixA = intval(substr($a, 0, strpos($a, '-')));
  $prefixB = intval(substr($b, 0, strpos($b, '-')));

  return $prefixA - $prefixB;
});

foreach ($migrationFiles as $migrationFile) {
  echo "Check for " . $migrationFile ."\n";
  include $migrationFile;
  echo $migrationFile ." is done !\n";
}
