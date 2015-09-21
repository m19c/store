<?php
namespace Store\Plugin;

use Store\Store;

trait Fill
{

  public function fill($startIndex, $count, $value) : Store
  {
    $this->data = array_fill($startIndex, $count, $value);
    return $this;
  }

}