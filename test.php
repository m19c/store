<?php
declare(strict_types=1);
require_once './vendor/autoload.php';

use Store\Store;

$s = new Store([
  ['name' => 'Marc', 'age' => 1337],
  ['name' => 'Marie', 'age' => 28],
  ['name' => 'Lucas', 'age' => 9]
]);