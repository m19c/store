<?php
namespace Store\Plugin;

use Store\AbstractStore;
use Store\Plugin\Flatten;

/**
 * @codeCoverageIgnore
 */
class FlattenStore extends AbstractStore
{

  use Flatten;

  protected function instantiate(array $data = null, $parent = null)
  {
    if (null === $data) {
      $data = [];
    }

    return new FlattenStore($data, $parent);
  }

}