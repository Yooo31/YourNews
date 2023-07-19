<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$firstElement = [
  'user_id' => 1,
  'title' => '1er article',
  'description' => '1er article',
  'preview' => 'jsp',
  'content' => 'Voici du contenu',
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$firstElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
