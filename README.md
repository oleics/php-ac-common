
ac-common
=========

Commonly used PHP functions.

Install
-------

```sh
composer require oleics/ac-common
```

Usage
-----

```php
<?php
use Ac\Common\Common;
if(Common::is_assoc($arr)) {
  // $arr is an associative array
}

use Ac\Common\Path;
$match = Path::find('foo.text');
if($match !== false) {
  // found a file named 'foo.txt'
}
```


API
---

#### *abstract class* Common

Static helpers.

*array* **array_merge_recursive** ( array &$arrA, array &$arrB )

Like std array_merge_recursive, but removes duplets in indexed arrays.

*bool* **is_assoc** ( array &$arr )

Checks if an array is an associative array.

*string* **toDash** ( string $str )

Transforms a string into a lowercase-dashed string.

*string* **toCamel** ( string $str )

Transforms a string into a camel-cased string.

#### *abstract class* Path

*bool* | *string* **find** ( string &$filename [ , string $cwd ] )

Finds a file named like `$filename` by walking `$cwd` upwards.

Returns the full path to first file found, otherwise FALSE.

`$cwd` defaults to the result of `getcwd()`.

MIT License
-----------

Copyright (c) 2016 Oliver Leics <oliver.leics@gmail.com>

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
