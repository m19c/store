<?php
namespace Store\Plugin;

use Store\AbstractStore;
use Store\Plugin\Map;

/**
 * @codeCoverageIgnore
 */
class MapStore extends AbstractStore
{

  use Map;

  protected function instantiate(array $data = null, $parent = null)
  {
    if (null === $data) {
      $data = [];
    }

    return new MapStore($data, $parent);
  }

}