# PHP array objects

Create typed and object-oriented arrays in PHP

## Installation

Use Composer to install the image with this command:

`composer require sikessem/array-object`

## Usage

Example code:

```php
<?php

use SIKessEm\ArrayObject\{
  function map,
  Type
};

require_once $COMPOSER_AUTOLOAD_FILE; // Replace $COMPOSER_AUTOLOAD_FILE by the path of your vendor autoload

$array = [
  // ... Describe your array
];

$object1 = new class {
  // ... Describe your first object
};

$object2 = new class {
  // ... Describe your second object
};


/*
 * Your can use all PHP var types :
 * - Boolean
 * - Integer
 * - Double
 * - String
 * - Array
 * - Object
 * - Resource
 */
$map_array_object = map(Type::ARRAY, Type::OBJECT); // Create a new map of type [array => object]
$map_array_object->set($array, $object1); // Add a new association between $array and $object1
$map_array_object->set($array, $object2); // Set the old association of $array with $object2
$object = $map_array_object->get($array); // Get the object associated with $array into $object
print_r();
```

## Author

SIGUI Kessé Emmanuel ([https://sikessem.com/](https://sikessem.com/)) <[opensource@sikessem.com](mailto:opensource@sikessem.com)> | [GitLab](https://gitlab.com/SIKessEm) | [GitHub](https://github.com/SIKessEm) | [npm](https://npmjs.org/~sikessem) | [Composer - Packagist](https://packagist.org/packages/sikessem/) | [Twitter](https://twitter.com/SIKessEm_tweets)


## Security Reports

Please send any sensitive issue to [report@sikessem.com](mailto:report@sikessem.com). Thanks!