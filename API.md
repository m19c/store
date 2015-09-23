# Table of contents
1. Methods
  - `<abstract>` [`instantiate(array $data = null, $parent = null)`](#instantiatearray-data--null-parent--null)
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
  - [`isNotEqual($key, $value)`](#)
  - [`isStrictNotEqual($key, $value)`](#)
  - [`isGreaterThan($key, $value)`](#)
  - [`isGreaterOrEqualThan($key, $value)`](#)
  - [`isLowerThan($key, $value)`](#)
  - [`isLowerOrEqualThan($key, $value)`](#)
  - [`contains($value)`](#)
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
1. Plugins
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

# Methods
## `instantiate(array $data = null, $parent = null)`
...

```php
// ...
```

## `root()`
...

```php
// ...
```

## `parent()`
...

```php
// ...
```

## `set($key, $value = null)`
...

```php
// ...
```

## `get($key, $default = null)`
...

```php
// ...
```

## `getNested($key, $default = null)`
...

```php
// ...
```

## `all()`
...

```php
// ...
```

## `has($key)`
...

```php
// ...
```

## `count()`
...

```php
// ...
```

## `pushToStart()`
...

```php
// ...
```

## `pushToEnd()`
...

```php
// ...
```

## `indexOf($value)`
...

```php
// ...
```

## `first()`
Gets the first element.
```php
$store
  ->pushToEnd(0)
  ->pushToEnd('first')
  ->pushToEnd('second')
;

$store->first(); // 0
```

:fire: Be careful using `first()` on non-sequential arrays since it returns `false` if the requested index (`0`) is not available.

## `last()`
Gets the last element.

```php
$store
  ->pushToEnd(0)
  ->pushToEnd('first')
  ->pushToEnd('second')
;

$store->last(); // second
```

:fire: Be careful using `last()` on non-sequential arrays since it returns `false` if the requested index (e.g. `3` - example above) is not available.

## `isEqual($key, $value)`
...

```php
// ...
```

## `isStrictEqual($key, $value)`
...

```php
// ...
```

## `isNotEqual($key, $value)`
...
```php
```

## `isStrictNotEqual($key, $value)`
...
```php
```

## `isGreaterThan($key, $value)`
...
```php
```

## `isGreaterOrEqualThan($key, $value)`
...
```php
```

## `isLowerThan($key, $value)`
...
```php
```

## `isLowerOrEqualThan($key, $value)`
...
```php
```

## `contains($value)`
...
```php
```

## `isAssociative()`
...

```php
// ...
```

## `keys()`
...

```php
// ...
```

## `values()`
...

```php
// ...
```

## `toArray()`
...

```php
// ...
```

## `toJSON()`
...

```php
// ...
```

## `rewind()`
...

```php
// ...
```

## `current()`
...

```php
// ...
```

## `key()`
...

```php
// ...
```

## `next()`
...

```php
// ...
```

## `valid()`
...

```php
// ...
```

## `serialize()`
...

```php
// ...
```

## `unserialize($data)`
...

```php
// ...
```

## Plugins
### `Store\Plugin\Fill`
#### `fill($startIndex, $count, $value)`

### `Store\Plugin\Filter`
#### `filterGen(closure $callback)`
#### `filter(closure $callback)`

### `Store\Plugin\Flatten`
#### `flattenGen()`
#### `flatten()`

### `Store\Plugin\Intersection`
#### `intersection($data)`

### `Store\Plugin\Map`
#### `map(closure $callback)`

### `Store\Plugin\Merge`
#### `merge()`
#### `mergeRecursive()`