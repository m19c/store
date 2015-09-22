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

  public function testTransformNestedArray()
  {
    $children = [
      ['name' => 'A'],
      ['name' => 'B']
    ];

    $this->store->set('children', $children);

    $this->assertSame($this->store->all(), ['children' => $children], 'Original data (no hit)');

    $this->assertEquals($this->store->get('children')->get(0)->get('name'), 'A');
    $this->assertEquals($this->store->get('children')->get(1)->get('name'), 'B');

    $data = $this->store->all();

    $this->assertInstanceOf('Store\Store', $data['children']);
    $this->assertInstanceOf('Store\Store', $data['children']->get(0));
    $this->assertInstanceOf('Store\Store', $data['children']->get(1));
  }

  public function testToGetTheRootStore()
  {
    $this->store->set('customers', [
      [
        'name' => 'Jon Doe',
        'children' => [
          ['name' => 'Dana Doe']
        ]
      ]
    ]);

    $deep = $this->store->get('customers')->first()->get('children')->first();

    $this->assertEquals($this->store, $deep->root());
  }

  public function testToGetTheParent()
  {
    $this->store->set('customers', [
      [
        'name' => 'Jon Doe',
        'children' => [
          ['name' => 'Dana Doe']
        ]
      ]
    ]);

    $deep = $this->store->get('customers')->first()->get('children')->get(0);
    $this->assertEquals($this->store->get('customers')->first()->get('children'), $deep->parent());
  }

  public function testGetValue()
  {
    $this->store->set('firstname', 'Jon');

    $this->assertEquals('Jon', $this->store->get('firstname'));
    $this->assertEquals(null, $this->store->get('lastname'));
    $this->assertEquals('Doe', $this->store->get('lastname', 'Doe'));
  }

  public function testGetNested()
  {
    $this->store->set('children.1337', 'Fake Child');
    $this->store->set('children', [
      [
        'name' => 'Lara Doe',
        'children' => [
          ['name' => 'Sarah Doe']
        ]
      ]
    ]);

    $this->assertEquals('Lara Doe', $this->store->getNested('children.0.name'));
    $this->assertEquals('Sarah Doe', $this->store->getNested('children.0.children.0.name'));
    $this->assertEquals(null, $this->store->getNested('children.1.name'));
    $this->assertEquals('Fake Child', $this->store->getNested('children.1337'));
  }

  public function testCount()
  {
    $this->assertEquals(0, $this->store->count());

    $this->store
      ->set(0, 1)
      ->set(1, 2)
      ->set(2, 3)
    ;

    $this->assertEquals(3, $this->store->count());
  }

  public function testPushToStart()
  {
    $this->store
      ->set(1, 1)
      ->set(2, 2)
    ;

    $this->assertEquals(false, $this->store->first());

    $this->store->pushToStart(0);

    $this->assertEquals(0, $this->store->first());
  }

  public function testPushToEnd()
  {
    $this->store
      ->set(0, 1)
      ->set(1, 2)
    ;

    $this->assertEquals(2, $this->store->last());

    $this->store->pushToEnd(3);

    $this->assertEquals(3, $this->store->last());
  }

  public function testIndexOf()
  {
    $this->store
      ->set(0, 'Jon')
      ->set(1337, 'Sarah')
      ->set(-1, 'Tara')
    ;

    $this->assertEquals(0, $this->store->indexOf('Jon'));
    $this->assertEquals(1337, $this->store->indexOf('Sarah'));
    $this->assertEquals(-1, $this->store->indexOf('Tara'));
  }

  public function testSetWithOneArgumentOverwritesTheData()
  {
    $this->store
      ->set('firstname', 'Jon')
      ->set('lastname', 'Doe')
    ;

    $this->assertEquals('Jon', $this->store->get('firstname'));
    $this->assertEquals('Doe', $this->store->get('lastname'));

    $this->store->set([
      'firstname' => 'Tara',
      'lastname' => 'Some'
    ]);

    $this->assertEquals('Tara', $this->store->get('firstname'));
    $this->assertEquals('Some', $this->store->get('lastname'));
  }

}