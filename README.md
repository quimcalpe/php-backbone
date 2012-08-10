php-backbone
============

PHP shim to work transparently with REST and JSON requests, enables support in PHP for Backbone default behaviour. In other words, no need to use `Backbone.emulateHTTP=true;` nor `Backbone.emulateJSON=true;` flags for legacy servers.

Usage
=====
```php
require_once 'php-backbone.php';  // require php-backbone shim

// you can use now $_PUT, $_DELETE as you would expect

```

Comments
========

It should work on clients/libraries/frameworks other than Backbone, any RESTful interface and/or JSON requests should "just work", but I only tested Backbone.

Caveats
=======

$_PUT and $_DELETE variables are not PHP Superglobals, you need to use "global $_PUT, $_DELETE;" in your functions/methods as a normal global variable would require.