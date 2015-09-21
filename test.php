<?php
declare(strict_types=1);
require_once './vendor/autoload.php';

use Store\Store;

$s = new Store(['firstname' => 'Marc', 'lastname' => 'Binder']);
$x = $s->filter(function ($value, $key) {
  return $key === 'firstname';
});

var_dump($x);