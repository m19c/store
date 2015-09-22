<?php
namespace Store\Plugin;

use Store\AbstractStore;
use Store\Plugin\Merge;

/**
 * @codeCoverageIgnore
 */
class MergeStore extends AbstractStore
{

  use Merge;

  protected function instantiate(array $data = null, $parent = null)
  {
    if (null === $data) {
      $data = [];
    }

    return new MergeStore($data, $parent);
  }

}