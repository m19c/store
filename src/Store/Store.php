<?php
namespace Store;

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
class Store extends AbstractStore
{

  protected function instantiate(array $data = null, $parent = null)
  {
    if (null === $data) {
      $data = [];
    }

    return new Store($data, $parent);
  }

}