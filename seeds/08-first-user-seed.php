<?php

require_once 'seeds/script/Seed.php';

$now = date('Y-m-d H:i:s');

$adminUser = [
  'email' => 'yoan@mail.com',
  'password' => 'pass',
  'name' => 'Yoan',
  'lastname' => 'Martins',
  'username' => 'Yoo',
  'account_type' => 'admin',
  'is_validated' => 1,
  'created_at' => $now,
];

$seeder = new Seeder();
try {
  $seeder->seed([$adminUser], 'users', 'username');
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}