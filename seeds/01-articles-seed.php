<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');


$firstElement = [
  'user_id' => 18,
  'title' => '1er article',
  'description' => '1er article',
  'preview' => 'jsp',
  'filePath' => 'jsp',
  'created_at' => $now,
  'updated_at' => $now,
];

$secondElement = [
  'user_id' => 18,
  'title' => '2ème article',
  'description' => '2ème article',
  'preview' => 'jsp',
  'filePath' => 'jsp',
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$firstElement, $secondElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
