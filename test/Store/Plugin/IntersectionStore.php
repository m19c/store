<?php
namespace Store\Plugin;

use Store\AbstractStore;
use Store\Plugin\Intersection;

/**
 * @codeCoverageIgnore
 */
class IntersectionStore extends AbstractStore
{

  use Intersection;

  protected function instantiate(array $data = null, $parent = null)
  {
    if (null === $data) {
      $data = [];
    }

    return new IntersectionStore($data, $parent);
  }

}