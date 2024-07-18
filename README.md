# A super simple TALL-stack currency switcher 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/heureka-agency/switcheroo.svg?style=flat-square)](https://packagist.org/packages/heureka-agency/switcheroo)
[![Total Downloads](https://img.shields.io/packagist/dt/heureka-agency/switcheroo.svg?style=flat-square)](https://packagist.org/packages/heureka-agency/switcheroo)

Under the hood, Switcheroo is a single Livewire component with some AlpineJS magic sprinkled on top. 
The component uses and requires TailwindCss for it's styling, but you're free to change to any other CSS framework or even
native CSS if you wish.

This package does not offer any currency conversion features yet.

## Installation

You can install the package via composer:

```bash
composer require heureka-agency/switcheroo
```

## Usage

### Config
First, publish the Switcheroo config with the following command:
```shell
php artisan vendor:publish --tag=switcheroo-config
```

```php
return [
    /**
     * Add any currencies you would like to handle with Switcheroo.
     * You can select all currencies using \HeurekaAgency\Switcheroo\Enums\Currency::all()
     */
    'enabled_currencies' => [
        \HeurekaAgency\Switcheroo\Enums\Currency::EUR,
        \HeurekaAgency\Switcheroo\Enums\Currency::USD,
        \HeurekaAgency\Switcheroo\Enums\Currency::GBP,
    ],

    /**
     * Set the default currency of the currency switcher.
     */
    'default_currency' => \HeurekaAgency\Switcheroo\Enums\Currency::EUR
];
```

### Including in your app

Then simply include the Switcheroo component wherever you'd like:

```html 
<livewire:switcheroo::currency-switcher /> 
```

### Events 
Switcheroo sends a single Livewire event every time a currency is selected. You can freely access this event from any other Livewire component or even from Javascript.

```php
#[On('currency-selected')]
public function yourCurrencySwitchHandler(string $currency): void
{
    $currency = Currency::from($currency);
    // any other business logic
} 
```

The selected currency is also stored in local storage using `Alpine.$persist`.

### Views
You're free to publish the Switcheroo views to customize the look and feel of the currency switcher:

```shell
php artisan vendor:publish --tag=switcheroo-views 
```

### Translations

Switcheroo is multilingual ready! Not that it has any readable strings to translate, but nonetheless, you can publish the language files using:

```shell
php artisan vendor:publish --tag=switcheroo-translations 
```

### Future plans

- create a helper to automatically convert currencies based on the current selection
- add support for language and country selection
- add support for native language display of currencies/languages/countries

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email thar.tristan@heureka-kreativ.hu instead of using the issue tracker.

## Credits

-   [Tristan Thar](https://github.com/heureka-agency)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
