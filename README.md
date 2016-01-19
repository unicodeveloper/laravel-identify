# laravel-identify

[![Latest Stable Version](https://poser.pugx.org/unicodeveloper/laravel-identify/v/stable.svg)](https://packagist.org/packages/unicodeveloper/laravel-identify)
![](https://img.shields.io/badge/unicodeveloper-approved-brightgreen.svg)
[![License](https://poser.pugx.org/unicodeveloper/laravel-identify/license.svg)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/unicodeveloper/laravel-identify.svg)](https://travis-ci.org/unicodeveloper/laravel-identify)
[![Quality Score](https://img.shields.io/scrutinizer/g/unicodeveloper/laravel-identify.svg?style=flat-square)](https://scrutinizer-ci.com/g/unicodeveloper/laravel-identify)
[![Total Downloads](https://img.shields.io/packagist/dt/unicodeveloper/laravel-identify.svg?style=flat-square)](https://packagist.org/packages/unicodeveloper/laravel-identify)

> Laravel 5 Package to identify a User's Browser, Operating System, Language and Device

## Installation

[PHP](https://php.net) 5.4+ or [HHVM](http://hhvm.com) 3.3+, and [Composer](https://getcomposer.org) are required.

To get the latest version of Laravel Identify, simply add the following line to the require block of your `composer.json` file.

```
"unicodeveloper/laravel-identify": "1.1.*"
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

Once Laravel Identify is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `Unicodeveloper\Identify\IdentifyServiceProvider::class`

Also, register the Facade like so:

```php
'aliases' => [
    ...
    'Identify' => Unicodeveloper\Identify\Facades\IdentifyFacade::class,
    ...
]
```

## Configuration

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="Unicodeveloper\Identify\IdentifyServiceProvider"
```
## Browser Detection

The browser method allows you to detect a user's browser and version.

### Browsers Detected

 * Vivaldi
 * Opera
 * Opera Mini
 * WebTV
 * Internet Explorer
 * Pocket Internet Explorer
 * Microsoft Edge
 * Konqueror
 * iCab
 * OmniWeb
 * Firebird
 * Firefox
 * Iceweasel
 * Shiretoko
 * Mozilla
 * Amaya
 * Lynx
 * Safari
 * Chrome
 * Navigator
 * GoogleBot
 * Yahoo! Slurp
 * W3C Validator
 * BlackBerry
 * IceCat
 * Nokia S60 OSS Browser
 * Nokia Browser
 * MSN Browser
 * MSN Bot
 * Netscape Navigator
 * Galeon
 * NetPositive
 * Phoenix
 * SeaMonkey
 * Yandex Browser

### Usage

```php
/**
 * Gets the version of the user's browser
 * @return string
 */
Identify::browser()->getVersion()

/**
 * Gets the name of the user's browser
 * @return string
 */
Identify::browser()->getName()
```
## OS Detection

The os method allows you to detect a user's operating system and version.

### OS Detected

 * Windows
 * Windows Phone
 * OS X
 * iOS
 * Android
 * Chrome OS
 * Linux
 * SymbOS
 * Nokia
 * BlackBerry
 * FreeBSD
 * OpenBSD
 * NetBSD
 * OpenSolaris
 * SunOS
 * OS2
 * BeOS

### Usage

```php
/**
 * Gets the version of the user's Operating System
 * @return string
 */
Identify::os()->getVersion()

/**
 * Gets the name of the user's Operating System
 * @return string
 */
Identify::os()->getName()
```

## Device Detection

The device method allows you to detect a user's device.

### Device Detected

 * iPad
 * iPhone
 * Windows Phone

### Usage

```php
/**
 * Gets the name of the user's device
 * @return string
 */
Identify::device()->getName()
```

## Language Detection

The language method allows you to detect a user's language.

### Usage

```php
/**
 * Gets the language that the user's browser contents are displayed in
 * @return string
 */
Identify::lang()->getLanguage()
```


## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.


## How can I thank you?

Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or HackerNews? Spread the word!

Don't forget to [follow me on twitter](https://twitter.com/unicodeveloper)!

Thanks!
Prosper Otemuyiwa.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
