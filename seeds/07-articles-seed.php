<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$seventhElement = [
  'user_id' => 1,
  'title' => 'Exploration marine',
  'description' => "Explorez les profondeurs de l'océan et découvrez les merveilles cachées de la vie marine.",
  'preview' => 'jsp',
  'content' => "L'océan est le berceau d'une biodiversité incroyable, des récifs coralliens colorés aux créatures marines étonnantes. Plongez dans l'univers aquatique et découvrez les secrets des abysses.",
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$seventhElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
