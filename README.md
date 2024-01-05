# kimchanhyung98/laravel-maker

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kimchanhyung98/laravel-maker.svg?style=flat-square)](https://packagist.org/packages/kimchanhyung98/laravel-maker)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/kimchanhyung98/laravel-maker/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/kimchanhyung98/laravel-maker/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/kimchanhyung98/laravel-maker/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/kimchanhyung98/laravel-maker/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kimchanhyung98/laravel-maker.svg?style=flat-square)](https://packagist.org/packages/kimchanhyung98/laravel-maker)

## Installation

You can install the package via composer:

```bash
composer require kimchanhyung98/laravel-maker
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-maker-views"
```

## Usage

```php
$variable = new Kimchanhyung98\LaravelMaker();
echo $variable->echoPhrase('Hello, Kimchanhyung98!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [kimchanhyung98](https://github.com/kimchanhyung98)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
