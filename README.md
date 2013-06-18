# Fuel ChromeLogger package

This is a simple ChromePhp package to allow a better development and debugging for FuelPHP framework.

ChromeLogger ships your server side debug messages to client side via encoded http headers. So you can send log messages when normal page requests, ajax xhr requests even your service resources consumed.

More about *ChromeLogger*: **http://craig.is/writing/chrome-logger**


## Installation

1. Clone from Github. Put it on `'packages_dir/chromelogger'` directory.

	git clone git://github.com/neaplus/fuel-chromelogger.git

2. Also you need to install Chrome extension: **https://chrome.google.com/webstore/detail/chrome-logger/noaneddfkdjfnfdakjjmocngnfkfehhd**


## Configuration

In app/config/config.php

	'always_load' => array('packages' => array(
		'chromelogger',
		...

or in your code

	Package::load('chromelogger');


## Usage

If you want to log something, just do the following:

```php
ChromeLogger::Log('Merhaba Dünya!');
// Or log with exclamation sign
ChromeLogger::Warn($_SERVER);
```

#####You can log string, array or object to chrome console.

**Works with Fuel 1.6.1**


### License

Fuel FirePHP package is released under the MIT License.