<?php
namespace Store\Plugin;

use Store\Store;

trait Intersection
{

  public function intersection($data)
  {
    $stack = func_get_args();
    array_unshift($stack, $this->toArray());

    return new Store(call_user_func_array('array_intersect', $stack));
  }

}