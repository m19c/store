<?php
namespace Store\Plugin;

trait Intersection
{

  public function intersection()
  {
    $stack = func_get_args();
    array_unshift($stack, $this->toArray());

    return $this->instantiate(call_user_func_array('array_intersect', $stack));
  }

}