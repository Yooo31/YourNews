<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$thirdElement = [
  'user_id' => 1,
  'title' => 'Voyage dans le temps',
  'description' => "Plongez dans l'histoire à travers des voyages dans le temps captivants. Revivez les époques passées et découvrez les événements qui ont façonné notre monde.",
  'preview' => 'jsp',
  'content' => "Des châteaux médiévaux aux vestiges des anciennes civilisations, en passant par les musées remplis d'artefacts historiques, le voyage dans le temps est une porte ouverte vers le passé. Explorez les rues pavées des vieux quartiers, écoutez les récits des ancêtres, et émerveillez-vous devant les trésors d'une époque révolue.",
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$thirdElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
