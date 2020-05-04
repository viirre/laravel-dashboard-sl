# A short description of the tile

[![Latest Version on Packagist](https://img.shields.io/packagist/v/robbens/laravel-dashboard-sl.svg?style=flat-square)](https://packagist.org/packages/robbens/laravel-dashboard-sl)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/robbens/laravel-dashboard-sl/run-tests?label=tests)](https://github.com/robbens/laravel-dashboard-sl/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/robbens/laravel-dashboard-sl.svg?style=flat-square)](https://packagist.org/packages/robbens/laravel-dashboard-sl)

A friendly explanation of what your tile does.

A tile for [Laravel Dashboard](https://docs.spatie.be/laravel-dashboard) that shows real time public transport data from [SL](https://sl.se).

## Installation

You can install the package via composer:

```bash
composer require robbens/laravel-dashboard-sl
```

## Usage

In your dashboard view you use the `livewire:sl-tile` component.

```html
<x-dashboard>
    <livewire:sl-tile position="a1:a2" />
</x-dashboard>
```

Schedule the command in `app/Console/Kernel.php`.

```php
protected function schedule(Schedule $schedule)
{
    $schedule->command(Robbens\SlTile\FetchDataFromSLApiCommand::class)->everyMinute();
}
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email yo@robin.se instead of using the issue tracker.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
