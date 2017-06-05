Config
======

A Basic configuration container

Installation
------------

```
composer require netsilik/config
```

Usage
-----

```php
use Netsilik\Lib\Config;

var_dump( Config::database('host', 'http://example.com') );
var_dump( Config::database('host') );
var_dump( Config::database('undefined') );
var_dump( Config::database('host', 'http://example.com') );
```
