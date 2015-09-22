<?php
namespace Store\Plugin;

require __DIR__ . '/FillStore.php';

use PHPUnit_Framework_TestCase as TestCase;
use Store\Plugin\FillStore;

class FillTest extends TestCase
{

  private $store;

  public function setUp()
  {
    $this->store = new FillStore();
  }

  public function tearDown()
  {
    $this->store = null;
  }

  public function testToFill()
  {
    $this->store->fill(0, 10, 'Jon');

    foreach ($this->store as $name) {
      $this->assertEquals('Jon', $name);
    }
  }

}