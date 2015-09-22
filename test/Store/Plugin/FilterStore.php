<?php
namespace Store\Plugin;

use Store\AbstractStore;
use Store\Plugin\Filter;

/**
 * @codeCoverageIgnore
 */
class FilterStore extends AbstractStore
{

  use Filter;

  protected function instantiate(array $data = null, $parent = null)
  {
    if (null === $data) {
      $data = [];
    }

    return new FilterStore($data, $parent);
  }

}