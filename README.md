# store
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.5-8892BF.svg?style=flat-square)](https://php.net/)
[![Code Climate](https://codeclimate.com/github/MrBoolean/store/badges/gpa.svg)](https://codeclimate.com/github/MrBoolean/store)
[![Test Coverage](https://codeclimate.com/github/MrBoolean/store/badges/coverage.svg)](https://codeclimate.com/github/MrBoolean/store/coverage)
[![Build Status](https://travis-ci.org/MrBoolean/store.svg?branch=master)](https://travis-ci.org/MrBoolean/store)
[![Packagist](https://img.shields.io/packagist/v/MrBoolean/store.svg)](https://packagist.org/packages/MrBoolean/store)
[![Packagist Downloads](https://img.shields.io/packagist/dm/MrBoolean/store.svg)](https://packagist.org/packages/MrBoolean/store)
[![Share](https://img.shields.io/twitter/url/http/github.com/MrBoolean/store.svg?style=social)](https://twitter.com/intent/tweet?status=http://github.com/MrBoolean/store)

`store` is a simple and flexible way to hold your data unified and handle it with methods `store` comes with. You decide which of those "special" methods you need and inject them by using traits ([list of all plugins](https://github.com/MrBoolean/store/tree/master/src/Store/Plugin)). A bunch of methods like `set`, `get`, `has` or for example `pushToEnd` are available by default. Read the [API docs](https://github.com/MrBoolean/store/blob/master/API.md) to get additional information!

**Arguments to use `store`**

1. Unfortunately, `PHP` uses an unclean argument acceptance. The function names are not clean enough to determine which one is the correct one for my behaviour (e.g. `array_push` and `array_unshift`). Sometimes a function accepts the `$haystack` as the first argument, sometimes a similar function does not. is possible.
1. Easy to extend.
1. Build the store you need using the above-mentioned [list of plugins](https://github.com/MrBoolean/store/tree/master/src/Store/Plugin).

## Install
```
{
  "require": {
    "mrboolean/store": "1.0.0"
  }
}
```

# License
The MIT License (MIT)

Copyright (c) 2015 Marc Binder <marcandrebinder@gmail.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.