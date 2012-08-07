php-backbone
============

PHP shim to work transparently with REST and JSON requests, enables support in PHP for Backbone default behaviour.

Usage:
```php
require 'php-backbone.php';  // require php-backbone shim

php_backbone();  // trigger code

// you can use now $_PUT, $_DELETE as you would expect

```


Comments
========

You can extract the code outside the function so triggering becomes unnecessary.


Caveats
=======

$_PUT and $_DELETE variables are not PHP Superglobals, you need to use "global $_PUT, $_DELETE;" in your functions/methods as a normal global variable requires