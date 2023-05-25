<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$sixthElement = [
  'user_id' => 18,
  'title' => '6 article',
  'description' => '6 article',
  'preview' => 'jsp',
  'filePath' => 'jsp',
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$sixthElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
