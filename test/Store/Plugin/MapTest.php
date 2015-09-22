<?php
namespace Store\Plugin;

require __DIR__ . '/MapStore.php';

use PHPUnit_Framework_TestCase as TestCase;
use Store\Plugin\MapStore;

class MapTest extends TestCase
{

  private $store;

  public function setUp()
  {
    $this->store = new MapStore();
  }

  public function tearDown()
  {
    $this->store = null;
  }

  public function testMap()
  {
    $this->store->set([
      ['name' => 'Jon', 'age' => 82],
      ['name' => 'Tara', 'age' => 14],
      ['name' => 'Prank', 'age' => 42],
      ['name' => 'Dead', 'age' => 1199]
    ]);

    $mapped = $this->store->map(function ($item) {
      return $item->get('age');
    });

    $total = 0;
    foreach ($mapped as $item) {
      $total += $item;
    }

    $this->assertEquals(1337, $total);
  }

}