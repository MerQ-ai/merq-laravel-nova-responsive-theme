# Laravel Nova Responsive Theme

A simple Laravel Nova theme that add responsiveness to the site.

It can be used as is, or as a base theme to your own ones.

## Installation

You can install the nova theme into a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require ghalwash/merq-laravel-nova-responsive-theme
```

This theme include some config based options. To use them, first publish the config file:

```bash
php artisan vendor:publish --provider="Ghalwash\MerqLaravelNovaThemeResponsive\ThemeServiceProvider"
```

And then you can configure the options editing the `config/merq-nova-theme-responsive.php` file.

## Credits

- [Waleed Ghalwash](https://www.linkedin.com/in/waleedghalwash)
- Original theme by [Gregorio Hernández Caso](https://github.com/gregoriohc)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
