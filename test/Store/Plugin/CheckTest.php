<?php
namespace Store\Plugin;

require __DIR__ . '/CheckStore.php';

use PHPUnit_Framework_TestCase as TestCase;
use Store\Plugin\CheckStore;

class CheckTest extends TestCase
{

  private $store;

  public function setUp()
  {
    $this->store = new CheckStore();
  }

  public function testIsNotEqual()
  {
    $this->store->set('value', 1337);

    $this->assertTrue($this->store->isNotEqual('value', 1338));
  }

  public function testIsStrictNotEqual()
  {
    $this->store->set('value', 1337);

    $this->assertTrue($this->store->isStrictNotEqual('value', '1337'));
  }

  public function testIsGreaterThan()
  {
    $this->store->set('value', 1337);

    $this->assertTrue($this->store->isGreaterThan('value', 1336));
  }

  public function testIsGreaterOrEqualThan()
  {
    $this->store->set('value', 1337);

    $this->assertTrue($this->store->isGreaterOrEqualThan('value', 1337));
  }

  public function testIsLowerThan()
  {
    $this->store->set('value', 1337);

    $this->assertTrue($this->store->isLowerThan('value', 1338));
  }

  public function testIsLowerOrEqualThan()
  {
    $this->store->set('value', 1337);

    $this->assertTrue($this->store->isLowerOrEqualThan('value', 1337));
  }

  public function testIsEqual()
  {
    $this->assertFalse($this->store->isEqual('firstname', 'Jon'), 'Returns false if the obtained key does not exist');

    $this->store->set('age', '1');
    $this->assertTrue($this->store->isEqual('age', 1));
  }

  public function testIsStrictEqual()
  {
    $this->assertFalse($this->store->isStrictEqual('firstname', 'Jon'), 'Returns false if the obtained key does not exist');

    $this->store->set('age', '1');
    $this->assertFalse($this->store->isStrictEqual('age', 1));

    $this->store->set('age', 1);
    $this->assertTrue($this->store->isStrictEqual('age', 1));
  }

}