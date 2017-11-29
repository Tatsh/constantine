# Constantine

This package contains constants and enumerations for various packages that are missing useful constants.

## Usage

```php
<?php

use Aws\S3\CommandOptions;

$client->putObject([
    CommandOptions::KEY => 'key to use',
    CommandOptions::BUCKET => 'A bucket name',
]);
```

## Why?

Because magic strings are awful. Constants prevent typos and are subject to auto-completion in most IDEs.

## Contributing

Please see `Aws\S3\CommandOptions.php` for an example of the formatting. This code base uses PSR-2 style.

For ease of use, the same namespace as the original package is used where applicable. For your class names, use suffixes like *Options*, *Keys*, etc (always plural).
