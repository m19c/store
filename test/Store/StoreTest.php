<?php
namespace Store;

use PHPUnit_Framework_TestCase as TestCase;

class StoreTest extends TestCase
{

  private $store;

  public function setUp()
  {
    $this->store = new Store();
  }

  public function tearDown()
  {
    $this->store = null;
  }

  public function testInitialDataAndParentValue()
  {
    $this->assertSame([], $this->store->all());
    $this->assertEquals(null, $this->store->parent());
  }

}