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
trait Intersection
{

  public function intersection()
  {
    $stack = func_get_args();
    array_unshift($stack, $this->toArray());

    return $this->instantiate(call_user_func_array('array_intersect', $stack));
  }

}