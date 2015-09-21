<?php
namespace Store\Plugin;

use Store\Store;
use closure;

trait Map
{

  public function map(closure $callback)
  {
    $result = new Store();

    foreach ($this->data as $key => $value) {
      $this->data[$key] = $value = $this->transform($value);
      $result->push($callback($value, $key));
    }

    return $result;
  }

}