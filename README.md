# Filament Captcha Field

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alareqi/filament-captcha-field.svg?style=flat-square)](https://packagist.org/packages/alareqi/filament-captcha-field)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/alareqi/filament-captcha-field/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/alareqi/filament-captcha-field/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/alareqi/filament-captcha-field/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/alareqi/filament-captcha-field/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/alareqi/filament-captcha-field.svg?style=flat-square)](https://packagist.org/packages/alareqi/filament-captcha-field)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require alareqi/filament-captcha-field
```
## Usage

```php
\Filament\Forms\Components\TextInput::make('captcha')->captcha();// default config 'flat'
\Filament\Forms\Components\TextInput::make('captcha')->captcha('math');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ayman Alareqi](https://github.com/aymanalareqi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
