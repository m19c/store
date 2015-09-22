# Table of contents
1. `Store\Store`
  - `[abstract]` [`instantiate(array $data = null, $parent = null)`](#instantiatearray-data--null-parent--null)
  - [`root()`](#root)
  - [`parent()`](#parent)
  - [`set($key, $value = null)`](#setkey-value--null)
  - [`get($key, $default = null)`](#getkey-default--null)
  - [`getNested($key, $default = null)`](#getnestedkey-default--null)
  - [`all()`](#all)
  - [`has($key)`](#haskey)
  - [`count()`](#count)
  - [`pushToStart()`](#pushtostart)
  - [`pushToEnd()`](#pushtoend)
  - [`indexOf($value)`](#indexofvalue)
  - [`first()`](#first)
  - [`last()`](#last)
  - [`isEqual($key, $value)`](#isequalkey-value)
  - [`isStrictEqual($key, $value)`](#isstrictequalkey-value)
  - [`isAssociative()`](#isassociative)
  - [`keys()`](#keys)
  - [`values()`](#values)
  - [`toArray()`](#toarray)
  - [`toJSON()`](#tojson)
  - [`rewind()`](#rewind)
  - [`current()`](#current)
  - [`key()`](#key)
  - [`next()`](#next)
  - [`valid()`](#valid)
  - [`serialize()`](#serialize)
  - [`unserialize($data)`](#unserializedata)
1. `Store\Plugin\Fill`
  - [`fill($startIndex, $count, $value)`](#fillstartindex-count-value)
1. `Store\Plugin\Filter`
  - [`filterGen(closure $callback)`](#filtergenclosure-callback)
  - [`filter(closure $callback)`](#filterclosure-callback)
1. `Store\Plugin\Flatten`
  - [`flattenGen()`](#flattengen)
  - [`flatten()`](#flatten)
1. `Store\Plugin\Intersection`
  - [`intersection($data)`](#intersectiondata)
1. `Store\Plugin\Map`
  - [`map(closure $callback)`](#mapclosure-callback)
1. `Store\Plugin\Merge`
  - [`merge()`](#merge)
  - [`mergeRecursive()`](#mergerecursive)

# API
## `Store\Store`
### `instantiate(array $data = null, $parent = null)`
### `root()`
### `parent()`
### `set($key, $value = null)`
### `get($key, $default = null)`
### `getNested($key, $default = null)`
### `all()`
### `has($key)`
### `count()`
### `pushToStart()`
### `pushToEnd()`
### `indexOf($value)`
### `first()`
### `last()`
### `isEqual($key, $value)`
### `isStrictEqual($key, $value)`
### `isAssociative()`
### `keys()`
### `values()`
### `toArray()`
### `toJSON()`
### `rewind()`
### `current()`
### `key()`
### `next()`
### `valid()`
### `serialize()`
### `unserialize($data)`

## `Store\Plugin\Fill`
### `fill($startIndex, $count, $value)`

## `Store\Plugin\Filter`
### `filterGen(closure $callback)`
### `filter(closure $callback)`

## `Store\Plugin\Flatten`
### `flattenGen()`
### `flatten()`

## `Store\Plugin\Intersection`
### `intersection($data)`

## `Store\Plugin\Map`
### `map(closure $callback)`

## `Store\Plugin\Merge`
### `merge()`
### `mergeRecursive()`