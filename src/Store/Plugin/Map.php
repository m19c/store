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
trait Map
{

  public function map(closure $callback)
  {
    $result = $this->instantiate();

    foreach ($this->data as $key => $value) {
      $this->data[$key] = $value = $this->transform($value);
      $result->pushToEnd($callback($value, $key));
    }

    return $result;
  }

}