<?php
namespace Store\Plugin;

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