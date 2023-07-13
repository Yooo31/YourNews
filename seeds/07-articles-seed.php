<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$seventhElement = [
  'user_id' => 1,
  'title' => '7 article',
  'description' => '7 article',
  'preview' => 'jsp',
  'content' => 'Voici du contenu',
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$seventhElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
