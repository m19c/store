<?php
namespace Store\Plugin;

require __DIR__ . '/FilterStore.php';

use PHPUnit_Framework_TestCase as TestCase;
use Store\Plugin\FilterStore;

class FilterTest extends TestCase
{

  private $store;

  public function setUp()
  {
    $this->store = new FilterStore();
  }

  public function tearDown()
  {
    $this->store = null;
  }

  protected function filterEqualsBy($field, $value)
  {
    return function ($store) use($field, $value) {
      return $store->isStrictEqual($field, $value);
    };
  }

  public function testToFilterUsingTheGenerator()
  {
    $this->store->set('children', [
      ['name' => 'Jon'],
      ['name' => 'Tara'],
      ['name' => 'Jon']
    ]);

    $data = [];
    foreach ($this->store->get('children')->filterGen($this->filterEqualsBy('name', 'Jon')) as $result) {
      array_push($data, $result);
    }

    $this->assertCount(2, $data);
  }

  public function testToFilter()
  {
    $this->store->set('children', [
      ['name' => 'Jon'],
      ['name' => 'Tara'],
      ['name' => 'Jon']
    ]);

    $result = $this->store->get('children')->filter($this->filterEqualsBy('name', 'Jon'));

    $this->assertEquals(2, $result->count());
    $this->assertInstanceOf('Store\Plugin\FilterStore', $result);
  }

}