<?php
namespace Store\Plugin;

use Store\AbstractStore;
use Store\Plugin\Fill;

/**
 * @codeCoverageIgnore
 */
class FillStore extends AbstractStore
{

  use Fill;

  protected function instantiate(array $data = null, $parent = null)
  {
    if (null === $data) {
      $data = [];
    }

    return new FillStore($data, $parent);
  }

}