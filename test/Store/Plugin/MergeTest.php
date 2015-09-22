<?php
namespace Store\Plugin;

require __DIR__ . '/MergeStore.php';

use PHPUnit_Framework_TestCase as TestCase;
use Store\Plugin\MergeStore;

class MergeTest extends TestCase
{

  private $store;

  public function setUp()
  {
    $this->store = new MergeStore([
      'name' => 'Jon Doe',
      'children' => [
        ['name' => 'Tara Doe'],
        ['name' => 'Bastard Snow']
      ]
    ]);
  }

  public function tearDown()
  {
    $this->store = null;
  }

  public function testMerge()
  {
    $this->store->merge([
      'name' => 'Tara Doe',
      'children' => [
        ['name' => 'Jon Doe']
      ]
    ]);

    $this->assertEquals('Tara Doe', $this->store->get('name'));
    $this->assertEquals(1, $this->store->get('children')->count());
    $this->assertEquals('Jon Doe', $this->store->get('children')->first()->get('name'));
  }

  public function testMergeRecursive()
  {
    $this->store->mergeRecursive([
      'children' => [
        ['name' => 'Jon Doe'],
      ]
    ]);

    $this->assertEquals('Jon Doe', $this->store->get('name'));
    $this->assertEquals(3, $this->store->get('children')->count());
    $this->assertEquals('Jon Doe', $this->store->get('children')->last()->get('name'));
  }

}