<?php
namespace Store\Plugin;

use Store\Store;
use RecursiveIteratorIterator;
use RecursiveArrayIterator;

trait Flatten
{

  public function flattenGen()
  {
    $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($this->data));

    foreach($iterator as $value) {
      yield $value;
    }
  }

  public function flatten()
  {
    $result = new Store();

    foreach ($this->flattenGen() as $value) {
      $result->pushToEnd($value);
    }

    return $result;
  }

}