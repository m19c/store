<?php
namespace Store;

use Countable;
use InvalidArgumentException;
use IteratorAggregate;
use Serializable;
use Iterator;

class Store implements Countable, Serializable, Iterator
{

  protected $parent;
  protected $data;

  public function __construct(array $data = null, $parent = null)
  {
    if (null === $data) {
      $data = [];
    }

    $this->parent = $parent;
    $this->data   = $data;
  }

  protected function transform($value)
  {
    if (is_array($value)) {
      return new Store($value, $this);
    }

    return $value;
  }

  public function root()
  {
    $root = $this->parent();

    while (null !== $root && null !== ($expected = $root->parent())) {
      $root = $expected;
    }

    return $root;
  }

  public function parent()
  {
    return $this->parent;
  }

  public function set($key, $value = null)
  {
    if (is_array($key) && null === $value) {
        $this->data = $key;
    } else {
      $this->data[$key] = $value;
    }

    return $this;
  }

  public function get($key, $default = null)
  {
    if ($this->has($key)) {
      $this->data[$key] = $this->transform($this->data[$key]);
      return $this->data[$key];
    }

    return $default;
  }

  public function getNested($key, $default = null)
  {
    if ($this->has($key)) {
      return $this->transform($this->data[$key]);
    }

    $parts = explode('.', $key);

    while (count($parts) > 0) {
      $clazz   = ($current) ? $current : $this;
      $current = $clazz->get(array_shift($parts));

      if (null === $current) {
        return $default;
      }
    }

    return $current;
  }

  public function all()
  {
    return $this->data;
  }

  public function has($key)
  {
    return array_key_exists($key, $this->data);
  }

  public function count()
  {
    return count($this->data);
  }

  public function pushToStart()
  {
    foreach (array_reverse(func_get_args()) as $argument) {
      array_unshift($this->data, $argument);
    }

    return $this;
  }

  public function pushToEnd()
  {
    foreach (func_get_args() as $argument) {
      array_push($this->data, $argument);
    }

    return $this;
  }

  public function indexOf($value)
  {
    return array_search($value, $this->data);
  }

  public function first()
  {
    return $this->get(0, false);
  }

  public function last()
  {
    return $this->get($this->count() - 1, false);
  }

  public function isEqual($key, $value)
  {
    if (false === $this->has($key)) {
      return false;
    }

    return $this->data[$key] == $value;
  }

  public function isStrictEqual($key, $value)
  {
    if (false === $this->has($key)) {
      return false;
    }

    return $this->data[$key] === $value;
  }

  public function isAssociative()
  {
    $keys = $this->keys();
    return array_keys($keys) !== $keys;
  }

  public function keys()
  {
    return array_keys($this->data);
  }

  public function values()
  {
    return array_values($this->data);
  }

  public function toArray()
  {
    $result = [];

    foreach ($this->data as $key => $value) {
      if ($value instanceof Store) {
        $value = $value->toArray();
      }

      $result[$key] = $value;
    }

    return $result;
  }

  public function toJSON()
  {
    return json_encode($this->toArray());
  }

  public function rewind()
  {
    reset($this->data);

    return $this;
  }

  public function current()
  {
    return current($this->data);
  }

  public function key()
  {
    return key($this->data);
  }

  public function next()
  {
    return next($this->data);
  }

  public function valid()
  {
    return isset($this->data[$this->key()]);
  }

  public function serialize()
  {
    return serialize($this->data);
  }

  public function unserialize($data)
  {
    $this->data = unserialize($data);
    return $this;
  }

}