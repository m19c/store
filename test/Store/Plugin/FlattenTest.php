<?php
namespace Store\Plugin;

require __DIR__ . '/FlattenStore.php';

use PHPUnit_Framework_TestCase as TestCase;
use Store\Plugin\FlattenStore;

class FattenTest extends TestCase
{

  private $store;

  public function setUp()
  {
    $this->store = new FlattenStore();
  }

  public function tearDown()
  {
    $this->store = null;
  }

  public function testFlattenGenerator()
  {
    $this->store->set([1, 2, [3, 4, [5, 6, 7], 8], 9]);
    $expected = 0;

    foreach ($this->store->flattenGen() as $actual) {
      $expected++;
      $this->assertEquals($expected, $actual);
    }

    $this->assertEquals(9, $expected);
  }

  public function testFlatten()
  {
    $this->store->set([1, 2, [3, 4, [5, 6, 7], 8], 9]);
    $flatten = $this->store->flatten();

    $this->assertEquals(0, $flatten->indexOf(1));
    $this->assertEquals(1, $flatten->indexOf(2));
    $this->assertEquals(2, $flatten->indexOf(3));
    $this->assertEquals(3, $flatten->indexOf(4));
    $this->assertEquals(4, $flatten->indexOf(5));
    $this->assertEquals(5, $flatten->indexOf(6));
    $this->assertEquals(6, $flatten->indexOf(7));
    $this->assertEquals(7, $flatten->indexOf(8));
    $this->assertEquals(8, $flatten->indexOf(9));
  }

}