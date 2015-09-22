# store
**`[ UNDER HEAVY DEVELOPMENT ]`**

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.5-8892BF.svg?style=flat-square)](https://php.net/)
[![Code Climate](https://codeclimate.com/github/MrBoolean/store/badges/gpa.svg)](https://codeclimate.com/github/MrBoolean/store)
[![Test Coverage](https://codeclimate.com/github/MrBoolean/store/badges/coverage.svg)](https://codeclimate.com/github/MrBoolean/store/coverage)

`store` is a simple and flexible way to hold your data unified and handle it with methods `store` comes with. You decide which of those "special" methods you need and inject them by using traits ([list of all plugins](https://github.com/MrBoolean/store/tree/master/src/Store/Plugin)). A bunch of methods like `set`, `get`, `has` or for example `pushToEnd` are available by default. Read the [API docs](https://github.com/MrBoolean/store/blob/master/API.md) to get additional information!

**Arguments to use `store`**

1. Unfortunately, `PHP` uses an unclean argument acceptance. The function names are not clean enough to determine which one is the correct one for my behaviour (e.g. `array_push` and `array_unshift`). Sometimes a function accepts the `$haystack` as the first argument, sometimes a similar function does not. is possible.
1. Easy to extend.
1. Build the store you need using the above-mentioned [list of plugins](https://github.com/MrBoolean/store/tree/master/src/Store/Plugin).

## Install
...

## Run the tests
...