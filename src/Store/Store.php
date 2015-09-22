<?php
namespace Store;

use Countable;
use InvalidArgumentException;
use IteratorAggregate;
use Serializable;
use Iterator;

/**
 * `store` is a simple and flexible way to hold your data unified and handle it
 * with methods `store` comes with.
 *
 * READ THE API DOCS:
 * https://github.com/MrBoolean/store/blob/master/API.md
 *
 * @author    Marc Binder <marcandrebinder@gmail.com>
 * @copyright 2015
 */
class Store implements Countable, Serializable, Iterator
{

  /**
   * @var Store|null
   */
  protected $parent;

  /**
   * @var array|null
   */
  protected $data;

  /**
   * @param array|null $data
   * @param Store|null $parent
   */
  public function __construct(array $data = null, $parent = null)
  {
    if (null === $data) {
      $data = [];
    }

    $this->parent = $parent;
    $this->data   = $data;
  }

  /**
   * Transforms an array to a `Store` instance
   *
   * @param  mixed $value
   * @return Store|mixed
   */
  protected function transform($value)
  {
    if (is_array($value)) {
      return new Store($value, $this);
    }

    return $value;
  }

  /**
   * Walks to the root element using the `parent()` method
   *
   * @return Store
   */
  public function root()
  {
    $root = $this->parent();

    while (null !== $root && null !== ($expected = $root->parent())) {
      $root = $expected;
    }

    return $root;
  }

  /**
   * Gets the parent element
   *
   * @return Store|null
   */
  public function parent()
  {
    return $this->parent;
  }

  /**
   * @param string|array|integer $key
   * @param array|mixed $value
   */
  public function set($key, $value = null)
  {
    if (is_array($key) && null === $value) {
        $this->data = $key;
    } else {
      $this->data[$key] = $value;
    }

    return $this;
  }

  /**
   * @param  string|integer $key
   * @param  mixed $default
   * @return mixed
   */
  public function get($key, $default = null)
  {
    if ($this->has($key)) {
      $this->data[$key] = $this->transform($this->data[$key]);
      return $this->data[$key];
    }

    return $default;
  }

  /**
   * @param  string|integer $key
   * @param  mixed $default
   * @return mixed
   */
  public function getNested($key, $default = null)
  {
    if ($this->has($key)) {
      return $this->transform($this->data[$key]);
    }

    $parts = explode('.', $key);

    while (count($parts) > 0) {
      $clazz   = (isset($current)) ? $current : $this;
      $current = $clazz->get(array_shift($parts));

      if (null === $current) {
        return $default;
      }
    }

    return $current;
  }

  /**
   * @return array
   */
  public function all()
  {
    return $this->data;
  }

  /**
   * @param  string|integer $key
   * @return boolean
   */
  public function has($key)
  {
    return array_key_exists($key, $this->data);
  }

  /**
   * @return integer
   */
  public function count()
  {
    return count($this->data);
  }

  /**
   * @return Store
   */
  public function pushToStart()
  {
    foreach (array_reverse(func_get_args()) as $argument) {
      array_unshift($this->data, $argument);
    }

    return $this;
  }

  /**
   * @return Store
   */
  public function pushToEnd()
  {
    foreach (func_get_args() as $argument) {
      array_push($this->data, $argument);
    }

    return $this;
  }

  /**
   * @param  mixed $value
   * @return integer
   */
  public function indexOf($value)
  {
    return array_search($value, $this->data);
  }

  /**
   * @return integer|boolean
   */
  public function first()
  {
    return $this->get(0, false);
  }

  /**
   * @return integer|boolean
   */
  public function last()
  {
    return $this->get($this->count() - 1, false);
  }

  /**
   * @param  string|integer  $key
   * @param  mixed           $value
   * @return boolean
   */
  public function isEqual($key, $value)
  {
    if (false === $this->has($key)) {
      return false;
    }

    return $this->data[$key] == $value;
  }

  /**
   * @param  string|integer  $key
   * @param  mixed           $value
   * @return boolean
   */
  public function isStrictEqual($key, $value)
  {
    if (false === $this->has($key)) {
      return false;
    }

    return $this->data[$key] === $value;
  }

  /**
   * @return boolean
   */
  public function isAssociative()
  {
    $keys = $this->keys()->toArray();
    return array_keys($keys) !== $keys;
  }

  /**
   * @return Store
   */
  public function keys()
  {
    return new Store(array_keys($this->data));
  }

  /**
   * @return Store
   */
  public function values()
  {
    return new Store(array_values($this->data));
  }

  /**
   * @return array
   */
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

  /**
   * @return string
   */
  public function toJSON()
  {
    return json_encode($this->toArray());
  }

  /**
   * {@inheritdoc}
   */
  public function rewind()
  {
    reset($this->data);

    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function current()
  {
    return $this->transform(current($this->data));
  }

  public function key()
  {
    return key($this->data);
  }

  /**
   * {@inheritdoc}
   */
  public function next()
  {
    return next($this->data);
  }

  /**
   * {@inheritdoc}
   */
  public function valid()
  {
    return isset($this->data[$this->key()]);
  }

  /**
   * {@inheritdoc}
   */
  public function serialize()
  {
    return serialize($this->data);
  }

  /**
   * {@inheritdoc}
   */
  public function unserialize($data)
  {
    $this->set(unserialize($data));
    return $this;
  }

}