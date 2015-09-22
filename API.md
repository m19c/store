# Table of contents
1. `Store\AbstractStore`
  - `[abstract]` [`instantiate(array $data = null, $parent = null)`](#)
  - [`root()`](#)
  - [`parent()`](#)
  - [`set($key, $value = null)`](#)
  - [`get($key, $default = null)`](#)
  - [`getNested($key, $default = null)`](#)
  - [`all()`](#)
  - [`has($key)`](#)
  - [`count()`](#)
  - [`pushToStart()`](#)
  - [`pushToEnd()`](#)
  - [`indexOf($value)`](#)
  - [`first()`](#)
  - [`last()`](#)
  - [`isEqual($key, $value)`](#)
  - [`isStrictEqual($key, $value)`](#)
  - [`isAssociative()`](#)
  - [`keys()`](#)
  - [`values()`](#)
  - [`toArray()`](#)
  - [`toJSON()`](#)
  - [`rewind()`](#)
  - [`current()`](#)
  - [`key()`](#)
  - [`next()`](#)
  - [`valid()`](#)
  - [`serialize()`](#)
  - [`unserialize($data)`](#)
1. `Store\Plugin\Fill`
  - [`fill($startIndex, $count, $value)`](#)
1. `Store\Plugin\Filter`
  - [`filterGen(closure $callback)`](#)
  - [`filter(closure $callback)`](#)
1. `Store\Plugin\Flatten`
  - [`flattenGen()`](#)
  - [`flatten()`](#)
1. `Store\Plugin\Intersection`
  - [`intersection($data)`](#)
1. `Store\Plugin\Map`
  - [`map(closure $callback)`](#)
1. `Store\Plugin\Merge`
  - [`merge()`](#)
  - [`mergeRecursive()`](#)

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