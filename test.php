<?php
declare(strict_types=1);
require_once './vendor/autoload.php';

use Store\Store;

$s = new Store([
  'blue',
  'yellow',
  'black'
]);

var_dump($s->last());