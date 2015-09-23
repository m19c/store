<?php
namespace Store\Plugin;

use RecursiveIteratorIterator;
use RecursiveArrayIterator;

/**
 * `store` is a simple and flexible way to hold your data unified and handle it
 * with methods `store` comes with.
 *
 * READ THE API DOCS:
 * https://github.com/MrBoolean/store/blob/master/API.md
 *
 * @author    Marc Binder <marcandrebinder@gmail.com>
 * @copyright 2015
 */
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
    $result = new self();

    foreach ($this->flattenGen() as $value) {
      $result->pushToEnd($value);
    }

    return $result;
  }

}