<?php

declare(strict_types=1);

use PHPDevsr\Rector\Codeigniter4\Set\CodeigniterSetList;
use Rector\Caching\ValueObject\Storage\FileCacheStorage;
use Rector\Config\RectorConfig;
use Rector\Php55\Rector\String_\StringClassNameToClassConstantRector;

return RectorConfig::configure()
    ->withImportNames(removeUnusedImports:true)
    ->withSets([
        CodeigniterSetList::CODEIGNITER_44,
    ])
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
        __DIR__ . '/config',
    ])
    ->withParallel(120, 8, 10)
    ->withCache('/tmp/rector', FileCacheStorage::class)
    ->withPHPStanConfigs([
        __DIR__ . '/phpstan.neon.dist',
        __DIR__ . '/vendor/codeigniter/phpstan-codeigniter/extension.neon',
        __DIR__ . '/vendor/phpstan/phpstan-strict-rules/rules.neon',
    ])
    ->withSkip([
        // for tests
        '*/Source/*',
        '*/Fixture/*',

        // skip for handle scoped, like in the rector-src as well
        // @see https://github.com/rectorphp/rector-src/blob/7f73cf017214257c170d34db3af7283eaeeab657/rector.php#L71
        StringClassNameToClassConstantRector::class,
    ]);
