<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$fifthElement = [
  'user_id' => 18,
  'title' => '5 article',
  'description' => '5 article',
  'preview' => 'jsp',
  'filePath' => 'jsp',
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$fifthElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
