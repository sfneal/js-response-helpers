# Javascript Response Helpers (for PHP applications)

[![Packagist PHP support](https://img.shields.io/packagist/php-v/sfneal/js-response-helpers)](https://packagist.org/packages/sfneal/js-response-helpers)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/sfneal/js-response-helpers.svg?style=flat-square)](https://packagist.org/packages/sfneal/js-response-helpers)
[![Build Status](https://travis-ci.com/sfneal/js-response-helpers.svg?branch=master&style=flat-square)](https://travis-ci.com/sfneal/js-response-helpers)
[![StyleCI](https://github.styleci.io/repos/289045985/shield?branch=master)](https://github.styleci.io/repos/289045985?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sfneal/js-response-helpers/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sfneal/js-response-helpers/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/sfneal/js-response-helpers.svg?style=flat-square)](https://packagist.org/packages/sfneal/js-response-helpers)

JavaScript response helpers for PHP applications.

## Installation

You can install the package via composer:

```bash
composer require sfneal/js-response-helpers
```

## Usage

Javascript response helpers can be used to generate responses in http controllers.

``` php
# generate an error message to be returned in a controller response
jsAlert('An error has occurred.');
>>> 'alert("An error has occurred.");'
```

### Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email stephen@stephenneal.net instead of using the issue tracker.

## Credits

- [Stephen Neal](https://github.com/sfneal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com).
