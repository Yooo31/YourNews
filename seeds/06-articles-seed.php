<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$sixthElement = [
  'user_id' => 1,
  'title' => 'Voyage dans le temps',
  'description' => 'Remontez le temps et revivez des moments historiques qui ont façonné notre monde.',
  'preview' => 'jsp',
  'content' => "L'histoire est le témoin des événements passés qui ont influencé notre présent. Explorez les civilisations anciennes, les batailles épiques et les figures emblématiques qui ont marqué l'humanité.",
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$sixthElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
