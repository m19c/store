<?php
namespace Store\Plugin;

use Store\AbstractStore;
use Store\Plugin\Check;

/**
 * @codeCoverageIgnore
 */
class CheckStore extends AbstractStore
{

  use Check;

  protected function instantiate(array $data = null, $parent = null)
  {
    if (null === $data) {
      $data = [];
    }

    return new CheckStore($data, $parent);
  }

}