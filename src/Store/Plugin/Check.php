<?php
namespace Store\Plugin;

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
trait Check
{

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
   * @param  string|integer  $key
   * @param  mixed           $value
   * @return boolean
   */
  public function isNotEqual($key, $value)
  {
    if (!$this->has($key)) {
      return false;
    }

    return $this->get($key) != $value;
  }

  /**
   * @param  string|integer  $key
   * @param  mixed           $value
   * @return boolean
   */
  public function isStrictNotEqual($key, $value)
  {
    if (!$this->has($key)) {
      return false;
    }

    return $this->get($key) !== $value;
  }

  /**
   * @param  string|integer  $key
   * @param  mixed           $value
   * @return boolean
   */
  public function isGreaterThan($key, $value)
  {
    if (!$this->has($key)) {
      return false;
    }

    return $this->get($key) > $value;
  }

  /**
   * @param  string|integer  $key
   * @param  mixed           $value
   * @return boolean
   */
  public function isGreaterOrEqualThan($key, $value)
  {
    if (!$this->has($key)) {
      return false;
    }

    return $this->get($key) >= $value;
  }

  /**
   * @param  string|integer  $key
   * @param  mixed           $value
   * @return boolean
   */
  public function isLowerThan($key, $value)
  {
    if (!$this->has($key)) {
      return false;
    }

    return $this->get($key) < $value;
  }

  /**
   * @param  string|integer  $key
   * @param  mixed           $value
   * @return boolean
   */
  public function isLowerOrEqualThan($key, $value)
  {
    if (!$this->has($key)) {
      return false;
    }

    return $this->get($key) <= $value;
  }

}