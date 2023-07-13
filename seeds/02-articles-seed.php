<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$secondElement = [
  'user_id' => 1,
  'title' => '2ème article',
  'description' => '2ème article',
  'preview' => 'jsp',
  'content' => 'Voici du contenu',
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$secondElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
