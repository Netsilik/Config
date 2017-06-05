Config
======

Configuration container.

---

European Union Public Licence, v. 1.1

Unless required by applicable law or agreed to in writing, software
distributed under the Licence is distributed on an "AS IS" basis,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.

Contact: info@netsilik.nl  
Latest version available at: https://gitlabs.com/Netsilik/Config


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
