Config
======

Configuration container.

---

European Union Public Licence, v. 1.1

Unless required by applicable law or agreed to in writing, software
distributed under the Licence is distributed on an "AS IS" basis,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.

Contact: info@netsilik.nl  
Latest version available at: https://gitlab.com/Netsilik/Config


Installation
------------

```
composer require netsilik/config
```

Usage
-----

```php
<?php
use Netsilik\Lib\Config;


// Set a directive
var_dump( Config::database('host', 'http://example.com') ); // returns: Void

// Get a directive
var_dump( Config::database('host') ); // returns: http://example.com

// Attempting to get an undefined directive triggers an E_USER_WARNING
var_dump( Config::database('undefined') ); // Triggers E_USER_WARNING:  Configuration directive database.undefined undefined in __FILE__ on line __LINE__

// Attempting to set a directive that has been set before, triggers an E_USER_ERROR
var_dump( Config::database('host', 'http://example.com') ); // Triggers E_USER_ERROR: Configuration directive database.host already defined in __FILE__ on line __LINE__
```
