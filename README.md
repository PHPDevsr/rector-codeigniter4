# Rector Rules for Codeigniter4
[![Tests](https://github.com/PHPDevsr/rector-codeigniter4/actions/workflows/test-phpunit.yaml/badge.svg)](https://github.com/PHPDevsr/rector-codeigniter4/actions/workflows/test-phpunit.yaml)
[![Code Analysis](https://github.com/PHPDevsr/rector-codeigniter4/actions/workflows/code_analysis.yaml/badge.svg)](https://github.com/PHPDevsr/rector-codeigniter4/actions/workflows/code_analysis.yaml)
[![Packagist Downloads](https://img.shields.io/packagist/dm/PHPDevsr/rector-codeigniter4)](https://packagist.org/packages/PHPDevsr/rector-codeigniter4/stats)
[![Packagist Version](https://img.shields.io/packagist/v/PHPDevsr/rector-codeigniter4)](https://packagist.org/packages/PHPDevsr/rector-codeigniter4)

See available [Codeigniter4 rules](/docs/rector_rules_overview.md)

## Install

This package is a [Rector](https://github.com/rectorphp/rector) extension developed by the Laravel community.

Install the `PHPDevsr\Rector\Codeigniter4` package as dependency:

```bash
composer require phpdevsr/rector-codeigniter4 --dev
```

## Use Sets

To add a set to your config, use `PHPDevsr\Rector\Codeigniter4\Set\CodeigniterSetList` class and pick one of the constants:

```php
<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use PHPDevsr\Rector\Codeigniter4\Set\CodeigniterSetList;

return RectorConfig::configure()
    ->withSets([
        CodeigniterSetList::CODEIGNITER_44
    ]);
```

## Learn Rector Faster

Rector is a tool that [we develop](https://getrector.org/) and share for free, so anyone can save hundreds of hours on refactoring.
But not everyone has time to understand Rector and AST complexity. You have 2 ways to speed this process up:

* Read the book - <a href="https://leanpub.com/rector-the-power-of-automated-refactoring">The Power of Automated Refactoring</a>
* Hire our experienced team to <a href="https://getrector.org/contact">improve your codebase</a>

Both ways support us to and improve Rector in sustainable way by learning from practical projects.
