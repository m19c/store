<?php
namespace Store\Plugin;

require __DIR__ . '/IntersectionStore.php';

use PHPUnit_Framework_TestCase as TestCase;
use Store\Plugin\IntersectionStore;

class IntersectionTest extends TestCase
{

  private $store;

  public function setUp()
  {
    $this->store = new IntersectionStore();
  }

  public function tearDown()
  {
    $this->store = null;
  }

  public function testIntersection()
  {
    $this->store->set(['blue', 'green', 'yellow']);
    $intersection = $this->store->intersection(['blue', 'green', 'purple', 'yellow'], ['blue', 'green']);

    $this->assertEquals(2, $intersection->count());
  }

}