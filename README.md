# Rollbar for Magento 2 [![Build Status](https://travis-ci.org/rollbar/rollbar-php-magento2.svg?branch=master)](https://travis-ci.org/rollbar/rollbar-php-magento2)

Rollbar error monitoring integration for Magento projects.

## Setup Instructions

**WARNING**: before installing Rollbar module, make sure that you can run `bin/magento setup:upgrade` in your Magento app without problems.

1. Add `rollbar-magento2` as a dependency in `composer.json` of your project and run `composer update`.
2. Add your Rollbar post server access token to `app/etc/env.php` under `rollbar` key, ie:
```php
'rollbar' => [
        'access_token' => '[YOUR ACCESS TOKEN]'
    ]
```
3. Add any additional Rollbar configuration in `app/etc/env.php` under `rollbar` key.
4. `bin/magento module:enable Rollbar_Magento2`.
5. `bin/magento setup:upgrade`.

## Usage and Reference

The module should automatically report all PHP errors and exceptions in your Magento2 app. If you wish to add any manual logging
in your app's code, use the standard Rollbar PHP `\Rollbar\Rollbar::log` method. `\Rollbar\Rollbar::init` has been invoked already
automatically with settings from `app/etc/env.php`.
  
## Release History & Changelog

See our [Releases](https://github.com/rollbar/rollbar-php-magento2/releases) page for a list of all releases, including changes.


## Related projects

This project is a Laravel wrapper of Rollbar PHP: [Rollbar PHP](https://github.com/rollbar/rollbar-php)

A CakePHP-specific package is avaliable for integrating Rollbar PHP with CakePHP 2.x:
[CakeRollbar](https://github.com/tranfuga25s/CakeRollbar)

A Flow-specific package is available for integrating Rollbar PHP with Neos Flow: [m12/flow-rollbar](https://packagist.org/packages/m12/flow-rollbar)

Yii package: [baibaratsky/yii-rollbar](https://github.com/baibaratsky/yii-rollbar)

Yii2 package: [baibaratsky/yii2-rollbar](https://github.com/baibaratsky/yii2-rollbar)

## Help / Support

If you run into any issues, please email us at [support@rollbar.com](mailto:support@rollbar.com)

For bug reports, please [open an issue on GitHub](https://github.com/rollbar/rollbar-php/issues/new).


## Contributing

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Added some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request
