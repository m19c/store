<?php
namespace Store\Plugin;

use closure;

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