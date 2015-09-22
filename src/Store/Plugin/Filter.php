<?php
namespace Store\Plugin;

use closure;

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