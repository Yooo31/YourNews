<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$secondElement = [
  'user_id' => 18,
  'title' => '2ème article',
  'description' => '2ème article',
  'preview' => 'jsp',
  'filePath' => 'jsp',
  'created_at' => $now,
  'updated_at' => $now,
];

$thirdElement = [
  'user_id' => 18,
  'title' => '3 article',
  'description' => '3 article',
  'preview' => 'jsp',
  'filePath' => 'jsp',
  'created_at' => $now,
  'updated_at' => $now,
];

$forthElement = [
  'user_id' => 18,
  'title' => '4 article',
  'description' => '4 article',
  'preview' => 'jsp',
  'filePath' => 'jsp',
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$forthElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
