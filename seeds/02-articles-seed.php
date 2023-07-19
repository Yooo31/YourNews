<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$secondElement = [
  'user_id' => 1,
  'title' => 'La cuisine du monde',
  'description' => 'Voyagez à travers les saveurs du monde avec une aventure culinaire unique. Des plats traditionnels aux délices exotiques, explorez une palette de goûts variés.',
  'preview' => 'jsp',
  'content' => "Chaque pays a sa propre cuisine, reflétant son histoire, sa culture et ses ingrédients locaux. Des épices envoûtantes de l'Inde aux pâtes succulentes d'Italie, en passant par les sushis délicats du Japon, il y a un univers de délices à découvrir. Partez pour un voyage gastronomique et régalez vos papilles avec des expériences culinaires inoubliables.",
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$secondElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
