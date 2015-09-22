<?php
namespace Store\Plugin;

trait Merge
{

  public function merge()
  {
    $stack = func_get_args();
    array_unshift($stack, $this->toArray());

    $this->data = call_user_func_array('array_merge', $stack);

    return $this;
  }

  public function mergeRecursive()
  {
    $stack = func_get_args();
    array_unshift($stack, $this->toArray());

    $this->data = call_user_func_array('array_merge_recursive', $stack);

    return $this;
  }

}