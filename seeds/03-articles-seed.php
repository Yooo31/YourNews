<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$thirdElement = [
  'user_id' => 18,
  'title' => '3 article',
  'description' => '3 article',
  'preview' => 'jsp',
  'filePath' => 'jsp',
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$thirdElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
