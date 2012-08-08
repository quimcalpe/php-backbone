php-backbone
============

PHP shim to work transparently with REST and JSON requests, enables support in PHP for Backbone default behaviour.

Usage:
```php
require_once 'php-backbone.php';  // require php-backbone shim

// you can use now $_PUT, $_DELETE as you would expect

```


Caveats
=======

$_PUT and $_DELETE variables are not PHP Superglobals, you need to use "global $_PUT, $_DELETE;" in your functions/methods as a normal global variable requires