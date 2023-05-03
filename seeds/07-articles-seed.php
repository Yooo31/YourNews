<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$seventhElement = [
  'user_id' => 18,
  'title' => '7 article',
  'description' => '7 article',
  'preview' => 'jsp',
  'filePath' => 'jsp',
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$seventhElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
