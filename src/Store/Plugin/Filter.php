<?php
namespace Store\Plugin;

use closure;

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
trait Filter
{

  public function filterGen(closure $callback)
  {
    foreach ($this->data as $key => $value) {
      $this->data[$key] = $value = $this->transform($value);

      if (true === $callback($value, $key)) {
        yield $value;
      }
    }
  }

  public function filter(closure $callback)
  {
    $result = $this->instantiate();

    foreach ($this->filterGen($callback) as $value) {
      $result->pushToEnd($value);
    }

    return $result;
  }

}