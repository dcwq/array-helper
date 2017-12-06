# Array Helper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dcwq/array-helper.svg?style=flat-square)](https://packagist.org/packages/dcwq/array-helper)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/dcwq/array-helper/master.svg?style=flat-square)](https://travis-ci.org/dcwq/array-helper)

## Requirements
Requires PHP version 5.6+

## Installation
This class can be used directly from a GIT clone:
``` bash 
git clone https://github.com/dcwq/array-helper.git
```

## Composer Usage
After either installing Composer using one of the two methods shown at http://getcomposer.org the composer.json would look like:

``` bash
require_once 'vendor/autoload.php';
```

Then you'll include the composer autoloader:
``` bash
{
    "require": {
        "dcwq/array-helper": "dev-master"
    }
}
```

You can install this package via composer directly in CLI:
``` bash
composer require dcwq/array-helper
```

## Usage
User dcwq\ArrayHelper namespace:

### ArrayHelper::flatten
_Flatten array of integer numbers_
```php
use dcwq\ArrayHelper;

$flattenArray = ArrayHelper::flatten([1, [2, [3], 4], 5], 1);
 ```
## Testing

You can run the tests with:

```bash
vendor/bin/phpunit
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.