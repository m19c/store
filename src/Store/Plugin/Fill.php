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
trait Fill
{

  public function fill($startIndex, $count, $value)
  {
    $this->data = array_fill($startIndex, $count, $value);
    return $this;
  }

}