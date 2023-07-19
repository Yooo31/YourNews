<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$seventhElement = [
  'user_id' => 1,
  'title' => 'La magie des livres',
  'description' => 'Plongez dans les mondes imaginaires des livres et laissez-vous transporter par des histoires captivantes.',
  'preview' => 'jsp',
  'content' => "Les livres sont des portails vers l'inconnu, des aventures épiques et des émotions profondes. Découvrez des univers fantastiques, des romances envoûtantes et des sagas épiques entre les pages de ces trésors littéraires.",
  'created_at' => $now,
  'updated_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$seventhElement], 'articles', 'title');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
