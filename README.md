# MerQ Laravel Nova Responsive Theme
[![Latest Version on Packagist](https://img.shields.io/packagist/v/ghalwash/merq-laravel-nova-theme-responsive.svg?style=flat-square)](https://packagist.org/packages/ghalwash/merq-laravel-nova-theme-responsive)
[![Total Downloads](https://img.shields.io/packagist/dt/ghalwash/merq-laravel-nova-theme-responsive.svg?style=flat-square)](https://packagist.org/packages/ghalwash/merq-laravel-nova-theme-responsive)
[![Latest Version on Github](https://img.shields.io/github/v/release/MerQ-ai/merq-laravel-nova-responsive-theme.svg?style=flat-square)](https://github.com/MerQ-ai/merq-laravel-nova-responsive-theme)

A simple Laravel Nova theme that add responsiveness to the site.

It can be used as is, or as a base theme to your own ones.

## Installation

You can install the nova theme into a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require ghalwash/merq-laravel-nova-theme-responsive
```

This theme include some config based options. To use them, first publish the config file:

```bash
php artisan vendor:publish --provider="Ghalwash\MerqLaravelNovaThemeResponsive\ThemeServiceProvider"
```

And then you can configure the options editing the `config/merq-nova-theme-responsive.php` file.

## Usage

You can use this theme either:

### A) Adding an stylesheet on your Nova app, and using the provided CSS classes to customize the styles

Make sure you have published the package skeleton stylesheet as mensioned in the installation section:

```bash
php artisan vendor:publish --provider="Ghalwash\MerqLaravelNovaThemeResponsive\ThemeServiceProvider"
```

Then, update the stylesheet with your custom styles. The file is located in `resources/css/vendor/merq-laravel-nova-theme-responsive/responsive.css`

### B) Relying on the default theme classes

By removing the file located in `resources/css/vendor/merq-laravel-nova-theme-responsive/responsive.css` now you are tottaly dependent on the default theme style.


## Uninstall

You can remove the nova responsive theme from your Laravel via composer:

```bash
composer remove ghalwash/merq-laravel-nova-theme-responsive
```

This will remove the package from vendor directory.

## Screenshots

Menu | Page | Modal
------------ | ------------- | -------------
![merq-nova-responsive-dashboard-view](https://user-images.githubusercontent.com/62288371/82613078-c3da9980-9bc4-11ea-83e6-d16e2d583309.png) | ![merq-nova-responsive-index-menu-view](https://user-images.githubusercontent.com/62288371/82613084-c5a45d00-9bc4-11ea-8e69-536772b024ef.png) | ![merq-nova-responsive-page-view](https://user-images.githubusercontent.com/62288371/82613089-c6d58a00-9bc4-11ea-8bcd-57da3f2bac72.png)




## Credits

- [Waleed Ghalwash](https://www.linkedin.com/in/waleedghalwash)
- Original theme by [Gregorio Hernández Caso](https://github.com/gregoriohc)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
