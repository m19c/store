# Store
**`[ UNDER HEAVY DEVELOPMENT ]`**

`store` is a simple and flexible way to hold your data unified and handle it with methods `store` comes with. You decide which of those "special" methods you need and inject them by using traits (see *store-plugins*). A bunch of methods like `set`, `get`, `has` or for example `pushToEnd` are available by default. Read the API docs to get additional information!

Arguments to use `store`:
1. Unfortunately, `PHP` uses an unclean argument acceptance. The function names are not clean enough to determine which one is the correct one for my behaviour (e.g. `array_push` and `array_unshift`). Sometimes a function accepts the `$haystack` as the first argument, sometimes a similar function does not.